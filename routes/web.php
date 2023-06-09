<?php

use App\Http\Controllers\Frontend\AssignmentController;
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
// Route::get('/', [LandingPageController::class, 'index']);
Route::get('/', [ReprimandController::class, 'index']);
Route::post('/reprimand', [ReprimandController::class, 'store']);
Route::get('/reprimand/{id}', [ReprimandController::class, 'show']);
Route::get('/assignment', [AssignmentController::class, 'index']);
Route::post('/assignment', [AssignmentController::class, 'store']);
Route::get('/assignment/{id}', [AssignmentController::class, 'show']);
