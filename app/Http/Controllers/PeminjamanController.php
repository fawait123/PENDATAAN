<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Peminjaman;

class PeminjamanController extends Controller {

    public function __construct() {
		$this->authorizeResource(Peminjaman::class, 'peminjaman');
	}

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, ) {

        $peminjaman = Peminjaman::query();

        if(!empty($request->search)) {
			$peminjaman->where('kd_peminjaman', 'like', '%' . $request->search . '%');
		}

        $peminjaman = $peminjaman->paginate(10);

        return view('peminjamen.index', [
            'peminjamans'=>$peminjaman
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('peminjamen.create', [
            'peminjam'=>\App\Models\Peminjam::all(),
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
            "id_peminjam" => "required",
            "jml_pinjam" => "required",
            "kd_det_aset" => "required",
        ]);

        try {

            $peminjaman = new Peminjaman();
            $peminjaman->id_user = auth()->user()->id_user;
            $peminjaman->id_peminjam = $request->id_peminjam;
            $peminjaman->jml_pinjam = $request->jml_pinjam;
            $peminjaman->save();

            \App\Models\DetPeminjaman::create([
                'tgl_pinjam'=>date('Y-m-d'),
                'verifikasi'=>'Belum Verifikasi',
                'keterangan'=>$request->keterangan,
                'kd_peminjaman'=>$peminjaman->kd_peminjaman,
                'kd_det_aset'=>$request->kd_det_aset,
                'status'=>'Pinjam'
            ]);

            return redirect()->route('peminjaman.index', [])->with('success', __('Peminjaman created successfully.'));
        } catch (\Throwable $e) {
            return redirect()->route('peminjaman.create', [])->withInput($request->input())->withErrors(['error' => $e->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Peminjaman $peminjaman
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Peminjaman $peminjaman,) {

        return view('peminjamen.show', compact('peminjaman'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Peminjaman $peminjaman
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Peminjaman $peminjaman,) {

        return view('peminjamen.edit', [
            'peminjam'=>\App\Models\Peminjam::all(),
            'detaset'=>\App\Models\DetAset::with('aset')->get(),
            'peminjaman'=>$peminjaman
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Peminjaman $peminjaman,) {

        $request->validate([
            "id_peminjam" => "required",
            "jml_pinjam" => "required",
            "kd_det_aset" => "required",
        ]);

        try {
            $peminjaman->kd_peminjaman = $request->kd_peminjaman;
            $peminjaman->id_user = auth()->user()->id_user;
            $peminjaman->id_peminjam = $request->id_peminjam;
            $peminjaman->jml_pinjam = $request->jml_pinjam;
            $peminjaman->save();

            \App\Models\DetPeminjaman::where('kd_peminjaman',$peminjaman->kd_peminjaman)->update([
                'tgl_pinjam'=>date('Y-m-d'),
                'verifikasi'=>'Belum Verifikasi',
                'keterangan'=>$request->keterangan,
                'kd_peminjaman'=>$peminjaman->kd_peminjaman,
                'kd_det_aset'=>$request->kd_det_aset,
                'status'=>'Pinjam'
            ]);

            return redirect()->route('peminjaman.index', [])->with('success', __('Peminjaman edited successfully.'));
        } catch (\Throwable $e) {
            return redirect()->route('peminjaman.edit', compact('peminjaman'))->withInput($request->input())->withErrors(['error' => $e->getMessage()]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Peminjaman $peminjaman
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Peminjaman $peminjaman,) {

        try {
            $peminjaman->delete();

            return redirect()->route('peminjaman.index', [])->with('success', __('Peminjaman deleted successfully'));
        } catch (\Throwable $e) {
            return redirect()->route('peminjaman.index', [])->with('error', 'Cannot delete Peminjaman: ' . $e->getMessage());
        }
    }


}
