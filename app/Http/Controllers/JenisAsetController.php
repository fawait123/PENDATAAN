<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\JenisAset;

class JenisAsetController extends Controller {

    public function __construct() {
		// $this->authorizeResource(JenisAset::class, 'jenisAset');
	}

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, ) {

        $jenisAset = JenisAset::query();

        if(!empty($request->search)) {
			$jenisAset->where('kd_jenis', 'like', '%' . $request->search . '%');
		}

        $jenisAset = $jenisAset->paginate(10);

        return view('jenis_asets.index', [
            'jenisAsets'=>$jenisAset
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {

        return view('jenis_asets.create', []);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, ) {

        $request->validate(["jenis_aset" => "required"]);

        try {

            $jenisAset = new JenisAset();
            $jenisAset->kd_jenis = $request->kd_jenis;
		$jenisAset->jenis_aset = $request->jenis_aset;
            $jenisAset->save();

            return redirect()->route('jenisAset.index', [])->with('success', __('Jenis Aset created successfully.'));
        } catch (\Throwable $e) {
            return redirect()->route('jenisAset.create', [])->withInput($request->input())->withErrors(['error' => $e->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\JenisAset $jenisAset
     *
     * @return \Illuminate\Http\Response
     */
    public function show(JenisAset $jenisAset,) {

        return view('jenis_asets.show', compact('jenisAset'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\JenisAset $jenisAset
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(JenisAset $jenisAset,) {

        return view('jenis_asets.edit', compact('jenisAset'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, JenisAset $jenisAset,) {

        $request->validate(["kd_jenis" => "required", "jenis_aset" => "required"]);

        try {
            $jenisAset->kd_jenis = $request->kd_jenis;
		    $jenisAset->jenis_aset = $request->jenis_aset;
            $jenisAset->save();

            return redirect()->route('jenisAset.index', [])->with('success', __('Jenis Aset edited successfully.'));
        } catch (\Throwable $e) {
            return redirect()->route('jenisAset.edit', compact('jenisAset'))->withInput($request->input())->withErrors(['error' => $e->getMessage()]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\JenisAset $jenisAset
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(JenisAset $jenisAset,) {

        try {
            $jenisAset->delete();

            return redirect()->route('jenisAset.index', [])->with('success', __('Jenis Aset deleted successfully'));
        } catch (\Throwable $e) {
            return redirect()->route('jenisAset.index', [])->with('error', 'Cannot delete Jenis Aset: ' . $e->getMessage());
        }
    }


}
