<?php

use App\Http\Controllers\LoginController;
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
Route::get('/', function () {
    return view('auth.login');
});

 

Route::get('/login', [LoginController::class, 'login'])->name('login');

Route::get('/register', [LoginController::class, 'register'])->name('register');

Route::prefix('dealer')->group(function() {
    Route::get('/dashboard', function () {
        return view('dealer.dashboard');
    });
    Route::get('/dealerku', function () {
        return view('dealer.dealerku');
    });
    Route::get('/datapegawai', function () {
        return view('dealer.pegawai');
    });
    Route::get('/dataantrian', function () {
        return view('dealer.antrian');
    });
    Route::get('/dataservis', function () {
        return view('dealer.servis');
    });
    Route::get('/datasparepart', function () {
        return view('dealer.sparepart');
    });
    Route::get('/transaksi', function () {
        return view('dealer.transaksi');
    });
    Route::get('/transaksiall', function () {
        return view('dealer.transaksiall');
    });
    Route::get('/transaksiservis', function () {
        return view('dealer.transaksiservis');
    });


});

Route::prefix('mechanic')->group(function() {
    Route::get('/dashboard', function () {
        return view('mechanic.dashboard');
    });
    Route::get('/profilku', function () {
        return view('mechanic.profilku');
    });
    Route::get('/antrian', function () {
        return view('mechanic.antrian');
    });
    Route::get('/servisku', function () {
        return view('mechanic.servisku');
    });
});