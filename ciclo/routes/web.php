<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [UserController::class, 'index']);
Route::post('users', [UserController::class, 'store'])->name('user.store');
Route::delete('users/{userID}', [UserController::class, 'destroy'])->name('users.destroy');

// Route::controller(UserController::class)->group(function() {
//     Route::get('/', 'index');
//     Route::post('users', 'store')->name('user.store');
//     Route::delete('users/{user}', 'destroy')->name('users.destroy');
// });
