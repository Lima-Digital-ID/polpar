<?php

use App\Http\Controllers\Frontend\LandingPageController;
use App\Http\Controllers\Frontend\ReprimandController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [LandingPageController::class, 'index']);
Route::get('/reprimand', [ReprimandController::class, 'index']);
Route::post('/reprimand', [ReprimandController::class, 'store']);
