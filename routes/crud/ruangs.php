<?php

use Illuminate\Support\Facades\Route;

Route::middleware(['auth'])->group(function () {
    Route::resource('ruang', App\Http\Controllers\RuangController::class, []);
    
});
