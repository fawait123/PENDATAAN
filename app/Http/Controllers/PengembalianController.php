<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Pengembalian;

class PengembalianController extends Controller {

    public function __construct() {
		$this->authorizeResource(Pengembalian::class, 'pengembalian');
	}

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, ) {

        $pengembalian = Pengembalian::query();

        if(!empty($request->search)) {
			$pengembalian->where('kd_pengembalian', 'like', '%' . $request->search . '%');
		}

        $pengembalian = $pengembalian->paginate(10);

        return view('pengembalians.index',[
            'pengembalians'=>$pengembalian
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        $pengembalian = Pengembalian::all();
        $pengembalian = array_map(function($e){
            return $e['kd_peminjaman'];
        },$pengembalian->toArray());
        return view('pengembalians.create', [
            'peminjaman'=>\App\Models\Peminjaman::whereNotIn('kd_peminjaman',$pengembalian)->get()
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
            "kd_peminjaman"=>"required",
            "jml_kembali" => "required",
            "keterangan"=>"required"
        ]);

        try {

            $peminjaman = \App\Models\Peminjaman::with('detail.detaset.aset')->where('kd_peminjaman',$request->kd_peminjaman)->first();


            $pengembalian = new Pengembalian();
            $pengembalian->id_user = auth()->user()->id_user;
            $pengembalian->kd_peminjaman = $request->kd_peminjaman;
            $pengembalian->jml_kembali = $request->jml_kembali;
            $pengembalian->save();


            \App\Models\DetPengembalian::create([
                'tgl_kembali'=>date('Y-m-d'),
                'verifikasi'=>'Belum Verifikasi',
                'keterangan'=>$request->keterangan,
                'kd_pengembalian'=>$pengembalian->kd_pengembalian,
                'kd_det_aset'=>$peminjaman->detail->kd_det_aset
            ]);

            \App\Models\DetPeminjaman::where('kd_peminjaman',$request->kd_peminjaman)->update([
                'tgl_kembali'=>date('Y-m-d'),
                'tgl_pengembalian'=>date('Y-m-d'),
                'status'=>'Kembali'
            ]);

            return redirect()->route('pengembalian.index', [])->with('success', __('Pengembalian created successfully.'));
        } catch (\Throwable $e) {
            return redirect()->route('pengembalian.create', [])->withInput($request->input())->withErrors(['error' => $e->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Pengembalian $pengembalian
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Pengembalian $pengembalian,) {

        return view('pengembalians.show', compact('pengembalian'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Pengembalian $pengembalian
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Pengembalian $pengembalian,) {

        $pengembalians = Pengembalian::where('kd_pengembalian','!=',$pengembalian->kd_pengembalian)->get();
        $pengembalians = array_map(function($e){
            return $e['kd_peminjaman'];
        },$pengembalians->toArray());


        return view('pengembalians.edit', [
            'pengembalian'=>$pengembalian,
            'peminjaman'=>\App\Models\Peminjaman::whereNotIn('kd_peminjaman',$pengembalians)->get()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pengembalian $pengembalian,) {

        $request->validate([
            "kd_pengembalian" => "required",
            "kd_peminjaman"=>"required",
            "jml_kembali" => "required",
            "keterangan"=>"required"
        ]);

        try {
            $peminjaman = \App\Models\Peminjaman::with('detail.detaset.aset')->where('kd_peminjaman',$request->kd_peminjaman)->first();


            $pengembalian->kd_pengembalian = $request->kd_pengembalian;
            $pengembalian->id_user = auth()->user()->id_user;
            $pengembalian->kd_peminjaman = $request->kd_peminjaman;
            $pengembalian->jml_kembali = $request->jml_kembali;
            $pengembalian->save();


            \App\Models\DetPengembalian::where('kd_pengembalian',$pengembalian->kd_pengembalian)->update([
                'tgl_kembali'=>date('Y-m-d'),
                'verifikasi'=>'Belum Verifikasi',
                'keterangan'=>$request->keterangan,
                'kd_pengembalian'=>$pengembalian->kd_pengembalian,
                'kd_det_aset'=>$peminjaman->detail->kd_det_aset
            ]);

            \App\Models\DetPeminjaman::where('kd_peminjaman',$request->kd_peminjaman)->update([
                'tgl_kembali'=>date('Y-m-d'),
                'tgl_pengembalian'=>date('Y-m-d'),
                'status'=>'Kembali'
            ]);

            return redirect()->route('pengembalian.index', [])->with('success', __('Pengembalian edited successfully.'));
        } catch (\Throwable $e) {
            return redirect()->route('pengembalian.edit', compact('pengembalian'))->withInput($request->input())->withErrors(['error' => $e->getMessage()]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Pengembalian $pengembalian
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pengembalian $pengembalian,) {

        try {
            $pengembalian->delete();

            return redirect()->route('pengembalian.index', [])->with('success', __('Pengembalian deleted successfully'));
        } catch (\Throwable $e) {
            return redirect()->route('pengembalian.index', [])->with('error', 'Cannot delete Pengembalian: ' . $e->getMessage());
        }
    }


}
