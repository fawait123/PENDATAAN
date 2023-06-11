<?php

use Illuminate\Support\Facades\Route;

Route::middleware(['auth','role:Admin'])->group(function () {
    Route::resource('jenisAset', App\Http\Controllers\JenisAsetController::class, []);

});
