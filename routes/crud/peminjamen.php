<?php

use Illuminate\Support\Facades\Route;

Route::middleware(['auth','role:Admin'])->group(function () {
    Route::resource('peminjaman', App\Http\Controllers\PeminjamanController::class, []);

});
