<?php

use App\Http\Controllers\CheckinController;
use App\Http\Controllers\JenisLayananController;
use App\Http\Controllers\KamarController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\PesanLayananController;
use App\Http\Controllers\TamuController;
use App\Http\Controllers\TypeKamarController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
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

    //Route Jenis layanan
    Route::get('/jenis-layanan/search', [App\Http\Controllers\JenisLayananController::class, 'search'])->name('jenis-layanan-search');
    Route::resource('jenis-layanan', JenisLayananController::class);

    //Route Layanan
    Route::get('/layanan/search', [App\Http\Controllers\LayananController::class, 'search'])->name('layanan-search');
    Route::resource('layanan', LayananController::class);

    //Route Reservasi
    Route::resource('/checkin', CheckinController::class);
    Route::get('/checkout', [App\Http\Controllers\CheckinController::class, 'checkout']);
    Route::get('/checkout/{checkin}/view', [App\Http\Controllers\CheckinController::class, 'view']);
    Route::get('/cleanUp', [App\Http\Controllers\CheckinController::class, 'cleanUp']);


    //Route Pesan Layanan

    Route::get('/pesan-layanan/{checkin_id}/pilih-menu', [App\Http\Controllers\PesanLayananController::class, 'pilihLayanan']);
    Route::get('/pesan-layanan/{checkin_id}/pilih-menu/{jenis_layanan_id}', [App\Http\Controllers\PesanLayananController::class, 'setPesanan']);
    Route::resource('/pesan-layanan', PesanLayananController::class);


    //Laporan
    Route::get('lap-administrasi/search', [App\Http\Controllers\LaporanController::class, 'search'])->name('lap-administrasi-search');

    Route::get('lap-management', [App\Http\Controllers\LaporanController::class, 'management']);

    Route::get('lap-administrasi', [App\Http\Controllers\LaporanController::class, 'administrasi']);
    Route::get('lap-administrasi/{checkin}', [App\Http\Controllers\LaporanController::class, 'view']);


    Route::get('laporan/tamu/download', [App\Http\Controllers\LaporanController::class, 'tamu']);
    Route::get('laporan/kamar/download', [App\Http\Controllers\LaporanController::class, 'kamar']);
    Route::get('laporan/type-kamar/download', [App\Http\Controllers\LaporanController::class, 'typeKamar']);
    Route::get('laporan/layanan/download', [App\Http\Controllers\LaporanController::class, 'layanan']);
    Route::get('laporan/jenis-layanan/download', [App\Http\Controllers\LaporanController::class, 'jenisLayanan']);
    Route::get('laporan/user/download', [App\Http\Controllers\LaporanController::class, 'user']);


    //Route Management User
    Route::get('/user/search', [App\Http\Controllers\UserController::class, 'search'])->name('user-search');
    Route::resource('user', UserController::class);
});
