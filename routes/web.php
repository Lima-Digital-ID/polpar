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

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });
Route::get('/', [ReprimandController::class, 'index']);
Route::post('/reprimand', [ReprimandController::class, 'store']);
Route::get('/reprimand/{id}', [ReprimandController::class, 'show']);
Route::get('/assignment', [AssignmentController::class, 'index']);
Route::post('/assignment', [AssignmentController::class, 'store']);
Route::get('/assignment/{id}', [AssignmentController::class, 'show']);

require __DIR__ . '/backoffice.php';
