<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;

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
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');

Route::get('home', [HomeController::class, 'index'])->name('home')->middleware('auth');
Route::post('logout', [LoginController::class, 'actionlogout'])->name('logout');
// Route::post('actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout')->middleware('auth');

Route::get('/template', function () {
    return view('welcome');
});

//auth
Route::get('/landing', function () {
    return view('landingpage');
});

//auth
// Route::get('/login', function () {
//     return view('admin.auth.login2');
// });
// Route::get('/registrasi', function () {
//     return view('admin.auth.registrasi');
// });

//dashboard admin
Route::get('/', function () {
    return view('admin.dashboard');
});

//profil
Route::get('/profil', function () {
    return view('admin.profil.index');
});
Route::get('/editProfilAdmin', function () {
    return view('admin.profil.edit');
});

//akun
Route::get('/akun', function () {
    return view('admin.akun.index');
});

//data pembeli
Route::get('/dataPembeli', function () {
    return view('admin.dataTiket.dataPembeli.index');
});
Route::get('/tiket', function () {
    return view('admin.dataTiket.tiket.index');
});
Route::get('/laporanTiketMasuk', function () {
    return view('admin.dataTiket.laporanTiketMasuk.index');
});

//data kunjungan
Route::get('/dataKunjungan', function () {
    return view('admin.dataKunjungan.index');
});
