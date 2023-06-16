<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return redirect()->route('login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/chart',[App\Http\Controllers\HomeController::class, 'chart'])->name('home.chart');
Route::get('/verifikasi',[App\Http\Controllers\HomeController::class, 'verifikasi'])->name('home.verifikasi');
Route::get('/profile',[App\Http\Controllers\HomeController::class, 'profile'])->name('profile');
Route::post('/profile/update',[App\Http\Controllers\HomeController::class, 'updateProfile'])->name('profile.update');
Route::post('/profile/password',[App\Http\Controllers\HomeController::class, 'updatePassword'])->name('profile.password');
\San\Crud\Crud::routes();

Route::group(['prefix'=>'laporan','middleware'=>['auth','role:Kepala Sekolah']],function(){
    Route::get('/{prefix}',[App\Http\Controllers\LaporanController::class,'index'])->name('laporan.index');
    Route::get('download/pdf',[App\Http\Controllers\LaporanController::class,'pdf'])->name('laporan.pdf');
});
