<?php

use Illuminate\Support\Facades\Route;

Route::middleware(['auth','role:Bid Sarana Prasarana,Sekretaris'])->group(function () {
    Route::resource('mutasi', App\Http\Controllers\MutasiController::class, []);

});
