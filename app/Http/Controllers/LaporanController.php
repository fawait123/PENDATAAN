<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function index(Request $request)
    {
        $path = $request->path();

        $model = explode('/',$path);
        $model = end($model);

        if(view()->exists($path)){
            $model = '\App\Models\\'.$model;
            $model = new $model;
            return view($path,[
                'data'=>$model->get(),
            ]);
        }

        return abort(404);
    }
}
