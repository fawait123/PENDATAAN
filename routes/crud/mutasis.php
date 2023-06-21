<?php

use Illuminate\Support\Facades\Route;

Route::middleware(['auth','role:Admin'])->group(function () {
    Route::resource('mutasi', App\Http\Controllers\MutasiController::class, []);

});
