<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Carbon\CarbonPeriod;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home',[
            'requestTrash'=>\App\Helpers\Utils::requestTrash(),
            'card'=>\App\Helpers\Utils::card()
        ]);
    }

    public function chart()
    {
        $period = CarbonPeriod::create(date('Y').'-01-01','1 month', date('Y').'-12-31');

        // Iterate over the period
        $datas = [];
        foreach ($period as $date) {
            $start_date = date('Y').'-'.$date->format('m').'-01';
            $end_date = date('Y').'-'.$date->format('m').'-31';
            $aset = \App\Models\DetAset::whereBetween('tgl_masuk',[$start_date,$end_date])->count();
            array_push($datas,[
                'month'=>$date->format('M'),
                'count'=>$aset
            ]);
        }

        return $datas;
    }

    public function verifikasi(Request $request)
    {
        $id = $request->id;
        $key = $request->key;
        $dataModel = $request->model;
        $model = '\App\Models\\'.$dataModel;
        $model = new $model;

        $data = $model->where($key,$id)->first();

        $value = $data->verifikasi == "Sudah Verifikasi" ? "Belum Verifikasi" : "Sudah Verifikasi";

        $update = $model->where($key,$id)->update([
            'verifikasi'=>$value
        ]);

        return $data;
    }
}
