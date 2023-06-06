<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Aset;
use App\Models\DetAset;

class AsetController extends Controller {

    public function __construct() {
		$this->authorizeResource(Aset::class, 'aset');
	}

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, ) {

        $aset = Aset::query();

        if(!empty($request->search)) {
			$aset->where('kd_aset', 'like', '%' . $request->search . '%');
		}

        $aset = $aset->paginate(10);

        return view('asets.index', [
            'asets'=>$aset
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {

        return view('asets.create', [
            'jenis'=>\App\Models\JenisAset::all(),
            'ruang'=>\App\Models\Ruang::all(),
            'asal'=>\App\Models\AsalAset::all(),
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
            "nama_aset" => "required",
            "kd_jenis" => "required",
            "kd_ruang"=>"required",
            "kd_asal"=>"required",
            "kondisi_awal"=>"required",
        ]);

        try {

            $aset = new Aset();
            $aset->nama_aset = $request->nama_aset;
            $aset->kd_jenis = $request->kd_jenis;
            $aset->id_user = auth()->user()->id_user;
            $aset->save();


            DetAset::create([
                "kondisi_awal" => $request->kondisi_awal,
                "tgl_masuk" => date('Y-m-d'),
                "verifikasi" => 'Belum Verifikasi',
                "kd_aset" => $aset->kd_aset,
                "kd_ruang" => $request->kd_ruang,
                "kd_asal" => $request->kd_asal,
            ]);



            return redirect()->route('aset.index', [])->with('success', __('Aset created successfully.'));
        } catch (\Throwable $e) {
            return redirect()->route('aset.create', [])->withInput($request->input())->withErrors(['error' => $e->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Aset $aset
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Aset $aset,) {
        return view('asets.show', compact('aset'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Aset $aset
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Aset $aset) {

        return view('asets.edit', [
            'aset'=>$aset,
            'jenis'=>\App\Models\JenisAset::all(),
            'ruang'=>\App\Models\Ruang::all(),
            'asal'=>\App\Models\AsalAset::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Aset $aset) {

        $request->validate([
            "nama_aset" => "required",
            "kd_jenis" => "required",
            "kd_ruang"=>"required",
            "kd_asal"=>"required",
            "kondisi_awal"=>"required",
        ]);

        try {
            $aset->kd_aset = $request->kd_aset;
            $aset->nama_aset = $request->nama_aset;
            $aset->kd_jenis = $request->kd_jenis;
            $aset->id_user =auth()->user()->id_user;
            $aset->save();


            DetAset::where('kd_aset',$aset->kd_aset)->update([
                "kondisi_awal" => $request->kondisi_awal,
                "tgl_masuk" => date('Y-m-d'),
                "verifikasi" => 'Belum Verifikasi',
                "kd_ruang" => $request->kd_ruang,
                "kd_asal" => $request->kd_asal,
            ]);

            return redirect()->route('aset.index', [])->with('success', __('Aset edited successfully.'));
        } catch (\Throwable $e) {
            return redirect()->route('aset.edit', compact('aset'))->withInput($request->input())->withErrors(['error' => $e->getMessage()]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Aset $aset
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Aset $aset,) {

        try {
            $aset->delete();

            return redirect()->route('aset.index', [])->with('success', __('Aset deleted successfully'));
        } catch (\Throwable $e) {
            return redirect()->route('aset.index', [])->with('error', 'Cannot delete Aset: ' . $e->getMessage());
        }
    }


}
