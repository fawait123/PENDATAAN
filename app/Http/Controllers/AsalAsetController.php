<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\AsalAset;

class AsalAsetController extends Controller {

    public function __construct() {
		$this->authorizeResource(AsalAset::class, 'asalAset');
	}

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, ) {

        $asalAset = AsalAset::query();

        if(!empty($request->search)) {
			$asalAset->where('kd_asal', 'like', '%' . $request->search . '%');
		}

        $asalAset = $asalAset->paginate(10);

        return view('asal_asets.index', [
            'asalAsets'=>$asalAset
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {

        return view('asal_asets.create', []);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, ) {

        $request->validate(["asal_aset" => "required"]);

        try {

            $asalAset = new AsalAset();
		    $asalAset->asal_aset = $request->asal_aset;
            $asalAset->save();

            return redirect()->route('asalAset.index', [])->with('success', __('Asal Aset created successfully.'));
        } catch (\Throwable $e) {
            return redirect()->route('asalAset.create', [])->withInput($request->input())->withErrors(['error' => $e->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\AsalAset $asalAset
     *
     * @return \Illuminate\Http\Response
     */
    public function show(AsalAset $asalAset) {


        return view('asal_asets.show', compact('asalAset'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\AsalAset $asalAset
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(AsalAset $asalAset) {

        return view('asal_asets.edit', compact('asalAset'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AsalAset $asalAset) {

        $request->validate(["kd_asal" => "required", "asal_aset" => "required"]);

        try {
            $asalAset->kd_asal = $request->kd_asal;
		    $asalAset->asal_aset = $request->asal_aset;
            $asalAset->save();

            return redirect()->route('asalAset.index', [])->with('success', __('Asal Aset edited successfully.'));
        } catch (\Throwable $e) {
            return redirect()->route('asalAset.edit', compact('asalAset'))->withInput($request->input())->withErrors(['error' => $e->getMessage()]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\AsalAset $asalAset
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(AsalAset $asalAset,) {

        try {
            $asalAset->delete();

            return redirect()->route('asalAset.index', [])->with('success', __('Asal Aset deleted successfully'));
        } catch (\Throwable $e) {
            return redirect()->route('asalAset.index', [])->with('error', 'Cannot delete Asal Aset: ' . $e->getMessage());
        }
    }


}
