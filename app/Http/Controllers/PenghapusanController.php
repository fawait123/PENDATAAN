<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Penghapusan;

class PenghapusanController extends Controller {

    public function __construct() {
		$this->authorizeResource(Penghapusan::class, 'penghapusan');
	}

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, ) {

        $penghapusan = Penghapusan::query();

        if(!empty($request->search)) {
			$penghapusan->where('kd_penghapusan', 'like', '%' . $request->search . '%');
		}

        $penghapusan = $penghapusan->paginate(10);

        return view('penghapusans.index', [
            'penghapusans'=>$penghapusan
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {

        return view('penghapusans.create', [
            'detaset'=>\App\Models\DetAset::with('aset')->get()
        ]);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, ) {

        $request->validate([
                "ba" => "required",
                "kondisi_akhir"=>"required",
                "kd_det_aset"=>"required",
                "keterangan"=>"required",
                "gambar"=>"required|mimes:jpeg,jpg,png"
            ]);

        try {

            if($request->hasFile('gambar')){
                $gambar = $request->file('gambar');
                $gambarName = rand(10000,99999).$gambar->getClientOriginalName();
                $gambar->move('uploads/penghapusan/',$gambarName);
            }

            $penghapusan = new Penghapusan();
            $penghapusan->id_user = auth()->user()->id_user;
            $penghapusan->ba = $request->ba;
            $penghapusan->save();

            \App\Models\DetPenghapusan::create([
                'tgl_penghapusan'=>date('Y-m-d'),
                "kondisi_akhir"=>$request->kondisi_akhir,
                "verifikasi"=>"Belum Verifikasi",
                "keterangan"=>$request->keterangan,
                "kd_det_aset"=>$request->kd_det_aset,
                "kd_penghapusan"=>$penghapusan->kd_penghapusan,
                "gambar"=>$gambarName
            ]);

            return redirect()->route('penghapusan.index', [])->with('success', __('Penghapusan created successfully.'));
        } catch (\Throwable $e) {
            return redirect()->route('penghapusan.create', [])->withInput($request->input())->withErrors(['error' => $e->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Penghapusan $penghapusan
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Penghapusan $penghapusan,) {

        return view('penghapusans.show', compact('penghapusan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Penghapusan $penghapusan
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Penghapusan $penghapusan,) {

        return view('penghapusans.edit', [
            'penghapusan'=>$penghapusan,
            'detaset'=>\App\Models\DetAset::with('aset')->get()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Penghapusan $penghapusan,) {

        $request->validate([
                "kd_penghapusan" => "required",
                "ba" => "required",
                "kondisi_akhir"=>"required",
                "kd_det_aset"=>"required",
                "keterangan"=>"required",
                // "gambar"=>"mimes:jpeg,jpg,png"
        ]);

        try {
            $gambarName = $penghapusan->detail->gambar;
            if($request->hasFile('gambar')){
                $gambar = $request->file('gambar');
                $gambarName = rand(10000,99999).$gambar->getClientOriginalName();
                $gambar->move('uploads/penghapusan/',$gambarName);
            }


            $penghapusan->kd_penghapusan = $request->kd_penghapusan;
            $penghapusan->id_user = auth()->user()->id_user;
            $penghapusan->ba = $request->ba;
            $penghapusan->save();


            \App\Models\DetPenghapusan::where('kd_penghapusan',$penghapusan->kd_penghapusan)->update([
                'tgl_penghapusan'=>date('Y-m-d'),
                "kondisi_akhir"=>$request->kondisi_akhir,
                "verifikasi"=>"Belum Verifikasi",
                "keterangan"=>$request->keterangan,
                "kd_det_aset"=>$request->kd_det_aset,
                "kd_penghapusan"=>$penghapusan->kd_penghapusan,
                "gambar"=>$gambarName
            ]);

            return redirect()->route('penghapusan.index', [])->with('success', __('Penghapusan edited successfully.'));
        } catch (\Throwable $e) {
            return redirect()->route('penghapusan.edit', compact('penghapusan'))->withInput($request->input())->withErrors(['error' => $e->getMessage()]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Penghapusan $penghapusan
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Penghapusan $penghapusan,) {

        try {
            $penghapusan->delete();

            return redirect()->route('penghapusan.index', [])->with('success', __('Penghapusan deleted successfully'));
        } catch (\Throwable $e) {
            return redirect()->route('penghapusan.index', [])->with('error', 'Cannot delete Penghapusan: ' . $e->getMessage());
        }
    }


}
