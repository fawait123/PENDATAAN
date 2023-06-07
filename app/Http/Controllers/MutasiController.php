<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Mutasi;

class MutasiController extends Controller {

    public function __construct() {
		$this->authorizeResource(Mutasi::class, 'mutasi');
	}

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, ) {

        $mutasi = Mutasi::query();

        if(!empty($request->search)) {
			$mutasi->where('kd_mutasi', 'like', '%' . $request->search . '%');
		}

        $mutasi = $mutasi->paginate(10);

        return view('mutasis.index', [
            "mutasis"=>$mutasi
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {

        return view('mutasis.create', [
            'ruang'=>\App\Models\Ruang::all(),
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
            "kd_ruang"=>'required',
            "kd_det_aset"=>"required",
            "keterangan"=>"required"
        ]);

        try {

            $mutasi = new Mutasi();
            $mutasi->id_user = auth()->user()->id_user;
            $mutasi->save();

            \App\Models\DetMutasi::create([
                "tgl_mutasi"=>date('Y-m-d'),
                "kd_ruang"=>$request->kd_ruang,
                "verifikasi"=>"Belum Verifikasi",
                "keterangan"=>$request->keterangan,
                "kd_det_aset"=>$request->kd_det_aset,
                "kd_mutasi"=>$mutasi->kd_mutasi
            ]);

            return redirect()->route('mutasi.index', [])->with('success', __('Mutasi created successfully.'));
        } catch (\Throwable $e) {
            return redirect()->route('mutasi.create', [])->withInput($request->input())->withErrors(['error' => $e->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Mutasi $mutasi
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Mutasi $mutasi,) {

        return view('mutasis.show', compact('mutasi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Mutasi $mutasi
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Mutasi $mutasi,) {

        return view('mutasis.edit', [
            'ruang'=>\App\Models\Ruang::all(),
            'detaset'=>\App\Models\DetAset::with('aset')->get(),
            'mutasi'=>$mutasi
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mutasi $mutasi,) {

        $request->validate([
            "kd_ruang"=>'required',
            "kd_det_aset"=>"required",
            "keterangan"=>"required",
            "kd_mutasi"=>"required"
        ]);

        try {
            $mutasi->kd_mutasi = $request->kd_mutasi;
		    $mutasi->id_user = auth()->user()->id_user;
            $mutasi->save();


            \App\Models\DetMutasi::where('kd_mutasi',$mutasi->kd_mutasi)->update([
                "tgl_mutasi"=>date('Y-m-d'),
                "kd_ruang"=>$request->kd_ruang,
                "verifikasi"=>"Belum Verifikasi",
                "keterangan"=>$request->keterangan,
                "kd_det_aset"=>$request->kd_det_aset,
                "kd_mutasi"=>$mutasi->kd_mutasi
            ]);

            return redirect()->route('mutasi.index', [])->with('success', __('Mutasi edited successfully.'));
        } catch (\Throwable $e) {
            return redirect()->route('mutasi.edit', compact('mutasi'))->withInput($request->input())->withErrors(['error' => $e->getMessage()]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Mutasi $mutasi
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mutasi $mutasi,) {

        try {
            $mutasi->delete();

            return redirect()->route('mutasi.index', [])->with('success', __('Mutasi deleted successfully'));
        } catch (\Throwable $e) {
            return redirect()->route('mutasi.index', [])->with('error', 'Cannot delete Mutasi: ' . $e->getMessage());
        }
    }


}
