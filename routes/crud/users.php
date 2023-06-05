<?php

use Illuminate\Support\Facades\Route;

Route::middleware(['auth'])->group(function () {
    Route::resource('user', App\Http\Controllers\UserController::class, []);
});
