<?php

use App\Http\Controllers\Backoffice\DashboardController;
use App\Http\Controllers\Backoffice\ReprimandController;
use Illuminate\Support\Facades\Route;

Route::prefix('backoffice')->group(function () {
    Route::middleware('auth')->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'index']);
        Route::resource('/reprimand', ReprimandController::class);
    });
    require __DIR__ . '/auth.php';
});
