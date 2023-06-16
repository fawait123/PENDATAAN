<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Carbon\CarbonPeriod;
use Illuminate\Support\Facades\Hash;

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

        $data = $model->with('detaset')->where($key,$id)->first();

        $value = $data->verifikasi == "Sudah Verifikasi" ? "Belum Verifikasi" : "Sudah Verifikasi";

        if($value == "Sudah Verifikasi"){
            if($request->model == "DetMutasi"){
                \App\Models\DetAset::where('kd_det_aset',$data->detaset->kd_det_aset)->update([
                    'kd_ruang'=>$data->kd_ruang
                ]);
            }else if($request->model == 'DetPenghapusan'){
                $detAset = \App\Models\DetAset::with('aset')->where('kd_det_aset',$data->detaset->kd_det_aset)->first();
                \App\Models\Aset::where('kd_aset',$detAset->kd_aset)->delete();
                \App\Models\DetAset::where('kd_det_aset',$detAset->kd_det_aset)->delete();
            }
        }

        $update = $model->where($key,$id)->update([
            'verifikasi'=>$value
        ]);

        return $data;
    }

    public function profile()
    {
        return view('profile');
    }

    public function updateProfile(Request $request)
    {
        $request->validate([
            'username'=>'required',
            'email'=>'required',
            'nama_lengkap'=>'required'
        ]);

        $fileName = auth()->user()->foto;
        if($request->hasFile('foto')){
            $file = $request->file('foto');
            $fileName = date('YmdHis').$file->getClientOriginalName();
            $file->move('uploads/',$fileName);
        }

        \App\Models\User::where('id_user',auth()->user()->id_user)->update([
            'username'=>$request->username,
            'email'=>$request->email,
            'nama_lengkap'=>$request->nama_lengkap,
            'foto'=>$fileName
        ]);

        return redirect()->back();
    }

    public function updatePassword(Request $request)
    {
        $request->validate([
            'password_old'=>'required',
            'password_new'=>'required|min:8'
        ]);

        $user = \App\Models\User::where('id_user',auth()->user()->id_user)->first();
        if(!Hash::check($request->password_old,$user->password)){
            return redirect()->back()->withInput()->withErrors(['password_old'=>'Password lama tidak sesuai']);
        }

        \App\Models\User::where('id_user',auth()->user()->id_user)->update([
            'password'=>Hash::make($request->password_new),
        ]);

        auth()->user()->logout();

        return redirect()->route('login');
    }
}
