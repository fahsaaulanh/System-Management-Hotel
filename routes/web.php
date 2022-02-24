<?php

use App\Http\Controllers\KamarController;
use App\Http\Controllers\TamuController;
use App\Http\Controllers\TypeKamarController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Kamar;
use PHPUnit\TextUI\XmlConfiguration\Group;

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



Route::get('/coba', function () {
    return view('layouts.sidebar');
});

Auth::routes();

Route::middleware('auth')->group(function () {

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    //Route Management Tamu
    Route::get('/tamu/search', [App\Http\Controllers\TamuController::class, 'search'])->name('tamu-search');
    Route::resource('/tamu', TamuController::class);

    //Route Management Type Kamar
    Route::get('/type-kamar/search', [App\Http\Controllers\TypeKamarController::class, 'search'])->name('type-kamar-search');
    Route::resource('/type-kamar', TypeKamarController::class);

    //Route Management Kamar
    Route::get('/kamar/search', [App\Http\Controllers\KamarController::class, 'search'])->name('kamar-search');
    Route::resource('/kamar', KamarController::class);
});






Route::get('/check-in', [App\Http\Controllers\HomeController::class, 'checkin'])->name('checkin');
Route::get('/check-out', [App\Http\Controllers\HomeController::class, 'checkout'])->name('checkout');
