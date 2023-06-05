<?php

use Illuminate\Support\Facades\Route;

Route::middleware(['auth'])->group(function () {
    Route::resource('peminjam', App\Http\Controllers\PeminjamController::class, []);
    
});
