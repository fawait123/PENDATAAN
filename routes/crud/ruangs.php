<?php

use Illuminate\Support\Facades\Route;

Route::middleware(['auth','role:Bid Sarana Prasarana'])->group(function () {
    Route::resource('ruang', App\Http\Controllers\RuangController::class, []);

});
