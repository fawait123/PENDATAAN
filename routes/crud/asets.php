<?php

use Illuminate\Support\Facades\Route;

Route::middleware(['auth','role:Bid Sarana Prasarana'])->group(function () {
    Route::resource('aset', App\Http\Controllers\AsetController::class, []);

});
