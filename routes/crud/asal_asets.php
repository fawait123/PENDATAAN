<?php

use Illuminate\Support\Facades\Route;

Route::middleware(['auth'])->group(function () {
    Route::resource('asalAset', App\Http\Controllers\AsalAsetController::class, []);
});
