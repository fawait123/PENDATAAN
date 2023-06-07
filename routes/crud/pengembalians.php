<?php

use Illuminate\Support\Facades\Route;

Route::middleware(['auth'])->group(function () {
    Route::resource('pengembalian', App\Http\Controllers\PengembalianController::class, []);
    
});
