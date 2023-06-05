<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Peminjam;

class PeminjamController extends Controller {

    public function __construct() {
		$this->authorizeResource(Peminjam::class, 'peminjam');
	}

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, ) {

        $peminjam = Peminjam::query();

        if(!empty($request->search)) {
			$peminjam->where('id_peminjam', 'like', '%' . $request->search . '%');
		}

        $peminjam = $peminjam->paginate(10);

        return view('peminjams.index', [
            'peminjams'=>$peminjam
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {

        return view('peminjams.create', []);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, ) {

        $request->validate(["nama" => "required", "alamat" => "required", "no_hp" => "required", "NIK" => "required"]);

        try {

            $peminjam = new Peminjam();
            $peminjam->id_peminjam = $request->id_peminjam;
            $peminjam->nama = $request->nama;
            $peminjam->alamat = $request->alamat;
            $peminjam->no_hp = $request->no_hp;
            $peminjam->NIK = $request->NIK;
            $peminjam->save();

            return redirect()->route('peminjam.index', [])->with('success', __('Peminjam created successfully.'));
        } catch (\Throwable $e) {
            return redirect()->route('peminjam.create', [])->withInput($request->input())->withErrors(['error' => $e->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Peminjam $peminjam
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Peminjam $peminjam,) {

        return view('peminjams.show', compact('peminjam'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Peminjam $peminjam
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Peminjam $peminjam,) {

        return view('peminjams.edit', compact('peminjam'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Peminjam $peminjam,) {

        $request->validate(["id_peminjam" => "required", "nama" => "required", "alamat" => "required", "no_hp" => "required", "NIK" => "required"]);

        try {
            $peminjam->id_peminjam = $request->id_peminjam;
		$peminjam->nama = $request->nama;
		$peminjam->alamat = $request->alamat;
		$peminjam->no_hp = $request->no_hp;
		$peminjam->NIK = $request->NIK;
            $peminjam->save();

            return redirect()->route('peminjams.index', [])->with('success', __('Peminjam edited successfully.'));
        } catch (\Throwable $e) {
            return redirect()->route('peminjams.edit', compact('peminjam'))->withInput($request->input())->withErrors(['error' => $e->getMessage()]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Peminjam $peminjam
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Peminjam $peminjam,) {

        try {
            $peminjam->delete();

            return redirect()->route('peminjams.index', [])->with('success', __('Peminjam deleted successfully'));
        } catch (\Throwable $e) {
            return redirect()->route('peminjams.index', [])->with('error', 'Cannot delete Peminjam: ' . $e->getMessage());
        }
    }


}
