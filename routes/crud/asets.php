<?php

use Illuminate\Support\Facades\Route;

Route::middleware(['auth','role:Admin'])->group(function () {
    Route::resource('aset', App\Http\Controllers\AsetController::class, []);

});
