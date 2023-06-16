<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Browsershot\Browsershot;
use Barryvdh\DomPDF\Facade\Pdf;

class LaporanController extends Controller
{
    public function index(Request $request)
    {
        $path = $request->path();

        $model = explode('/',$path);
        $model = end($model);

        if(view()->exists($path)){
            return view($path,[
                'data'=>$this->data($model,$request),
                'title'=>$model
            ]);
        }

        return abort(404);
    }

    private function data($prefix,$request){
        switch ($prefix) {
            case 'peminjaman':
                # code...
                $peminjaman = \App\Models\Peminjaman::query();
                $peminjaman = $peminjaman->with(['peminjam','detail.detaset']);
                    if(!empty($request->search)) {
                        $peminjaman->where('kd_peminjaman', 'like', '%' . $request->search . '%');
                    }
                $peminjaman = $peminjaman->get();
                return $peminjaman;
            break;
            case 'pengembalian':
                # code...
                $pengembalian = \App\Models\Pengembalian::query();
                $pengembalian = $pengembalian->with(['peminjaman.detail.detaset','detail']);
                    if(!empty($request->search)) {
                        $pengembalian->where('kd_pengembalian', 'like', '%' . $request->search . '%');
                    }

                $pengembalian = $pengembalian->get();
                return $pengembalian;
            break;
            case 'penghapusan':
                # code...
                $penghapusan = \App\Models\Penghapusan::query();
                $penghapusan = $penghapusan->with(['detail.detaset'=>fn($q)=>$q->withTrashed(),'detail.detaset.aset'=>fn($q)=>$q->withTrashed(),'user']);

                    if(!empty($request->search)) {
                        $penghapusan->where('kd_penghapusan', 'like', '%' . $request->search . '%');
                    }

                $penghapusan = $penghapusan->get();
                return $penghapusan;
            break;
            case 'mutasi':
                # code...
                $mutasi = \App\Models\Mutasi::query();
                $mutasi = $mutasi->with(['user','detail.detaset.aset','detail.ruang']);

                    if(!empty($request->search)) {
                        $mutasi->where('kd_mutasi', 'like', '%' . $request->search . '%');
                    }

                $mutasi = $mutasi->get();

                return $mutasi;
            break;
        }
    }

    public function pdf(Request $request)
    {
        $pdf = Pdf::loadView('laporan.download.'.$request['download'], [
            'data'=>$this->data($request['download'],$request),
            'title'=>strtoupper($request['download'])
        ]);
        return $pdf->download('LAPORAN '.strtoupper($request['download']).' - '.date('dmy').'.pdf');
    }
}
