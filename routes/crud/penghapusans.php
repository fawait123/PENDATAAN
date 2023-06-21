<?php

use Illuminate\Support\Facades\Route;

Route::middleware(['auth','role:Admin'])->group(function () {
    Route::resource('penghapusan', App\Http\Controllers\PenghapusanController::class, []);

});
