<?php

use Illuminate\Support\Facades\Route;

Route::middleware(['auth','role:Bid Sarana Prasarana'])->group(function () {
    Route::resource('asalAset', App\Http\Controllers\AsalAsetController::class, []);
});
