<?php

use Illuminate\Support\Facades\Route;

Route::middleware(['auth','role:Bid Sarana Prasarana'])->group(function () {
    Route::resource('peminjam', App\Http\Controllers\PeminjamController::class, []);
});
