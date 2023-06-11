<?php

use Illuminate\Support\Facades\Route;

Route::middleware(['auth','role:Sekretaris,Bid Sarana Prasarana'])->group(function () {
    Route::resource('peminjaman', App\Http\Controllers\PeminjamanController::class, []);

});
