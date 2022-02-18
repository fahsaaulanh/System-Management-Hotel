<?php

use App\Http\Controllers\TamuController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
<<<<<<< HEAD
Route::resource('tamu', TamuController::class);
=======
Route::get('/check-in', [App\Http\Controllers\HomeController::class, 'checkin'])->name('checkin');
Route::get('/check-out', [App\Http\Controllers\HomeController::class, 'checkout'])->name('checkout');
>>>>>>> 0cf3ffb7b9ba4d04072538d616df3862c6202787
