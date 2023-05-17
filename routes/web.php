<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\MechanicController;
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
Route::post('/login-process', [LoginController::class, 'login_process'])->name('login_process');

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
});

Route::prefix('mechanic')->group(function() {
    Route::get('/dashboard', [MechanicController::class, 'dashboard'])->name('dashboard');
    Route::get('/profilku', [MechanicController::class, 'profilku']);
    Route::get('/antrian', [MechanicController::class, 'antrian']);
    Route::get('/servisku', [MechanicController::class, 'servisku']);
});

Route::prefix('admin')->group(function() {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    });
    Route::get('/data-dealer', function () {
        return view('admin.data');
    });
    Route::get('/tambah-dealer', function () {
        return view('admin.tambah');
    });
});

Route::prefix('user')->group(function() {
    // // Route::get('/dashboard', function () {
    // //     return view('user.dashboard');
    // });
    Route::get('/yamaha', function () {
        return view('user.yamaha');
    });
    Route::get('/honda', function () {
        return view('user.honda');
    });
    Route::get('/suzuki', function () {
        return view('user.suzuki');
    });
    Route::get('/servisku', function () {
        return view('user.servisku');
    });
    Route::get('/servisku2', function () {
        return view('user.servisku2');
    });
    Route::get('/servisku3', function () {
        return view('user.servisku3');
    });
    Route::get('/servisku4', function () {
        return view('user.servisku4');
    });
    Route::get('/form', function () {
        return view('user.form');
    });
    Route::get('/form2', function () {
        return view('user.form2');
    });
});