<?php

use Illuminate\Support\Facades\Route;

Route::prefix('backoffice')->group(function () {
    Route::middleware('auth')->group(function () {
        Route::get('/dashboard', function () {
            return view('welcome');
        });
    });
    require __DIR__ . '/auth.php';
});
