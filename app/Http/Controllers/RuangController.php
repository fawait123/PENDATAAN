<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Ruang;

class RuangController extends Controller {

    public function __construct() {
		$this->authorizeResource(Ruang::class, 'ruang');
	}

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, ) {

        $ruang = Ruang::query();

        if(!empty($request->search)) {
			$ruang->where('kd_ruang', 'like', '%' . $request->search . '%');
		}

        $ruang = $ruang->paginate(10);

        return view('ruangs.index', [
            'ruangs'=>$ruang
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {

        return view('ruangs.create', []);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, ) {

        $request->validate(["nama_ruang" => "required"]);

        try {

            $ruang = new Ruang();
		    $ruang->nama_ruang = $request->nama_ruang;
            $ruang->save();

            return redirect()->route('ruang.index', [])->with('success', __('Ruang created successfully.'));
        } catch (\Throwable $e) {
            return redirect()->route('ruang.create', [])->withInput($request->input())->withErrors(['error' => $e->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Ruang $ruang
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Ruang $ruang,) {

        return view('ruangs.show', compact('ruang'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Ruang $ruang
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Ruang $ruang,) {

        return view('ruangs.edit', compact('ruang'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ruang $ruang,) {

        $request->validate(["kd_ruang" => "required", "nama_ruang" => "required"]);

        try {
            $ruang->kd_ruang = $request->kd_ruang;
		    $ruang->nama_ruang = $request->nama_ruang;
            $ruang->save();

            return redirect()->route('ruang.index', [])->with('success', __('Ruang edited successfully.'));
        } catch (\Throwable $e) {
            return redirect()->route('ruang.edit', compact('ruang'))->withInput($request->input())->withErrors(['error' => $e->getMessage()]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Ruang $ruang
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ruang $ruang,) {

        try {
            $ruang->delete();

            return redirect()->route('ruangs.index', [])->with('success', __('Ruang deleted successfully'));
        } catch (\Throwable $e) {
            return redirect()->route('ruangs.index', [])->with('error', 'Cannot delete Ruang: ' . $e->getMessage());
        }
    }


}
