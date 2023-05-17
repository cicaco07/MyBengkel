<?php

use App\Http\Controllers\DealerController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MechanicController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
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
Route::get('/register', 'App\Http\Controllers\Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('/register', 'App\Http\Controllers\Auth\RegisterController@register');
Route::get('/login', 'App\Http\Controllers\Auth\LoginController@showLoginForm')->name('login');
Route::post('/login', 'App\Http\Controllers\Auth\LoginController@login');
Route::post('/logout', 'App\Http\Controllers\Auth\LoginController@logout')->name('logout');

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/dashboard', function () {
        return view('dashboard');
    })->name('admin.dashboard');
});

Route::middleware(['auth', 'role:mechanic'])->group(function () {
    Route::prefix('mechanic')->group(function(){
        Route::get('/dashboard', [MechanicController::class, 'dashboard'])->name('mechanic.dashboard');
        Route::get('/profilku', [MechanicController::class, 'profilku']);
        Route::get('/antrian', [MechanicController::class, 'antrian']);
        Route::get('/servisku', [MechanicController::class, 'servisku']);
    });
});

Route::middleware(['auth', 'role:dealer'])->group(function () {
    Route::prefix('dealer')->group(function(){
        Route::get('/dashboard', [DealerController::class, 'dashboard'])->name('dealer.dashboard');
        Route::get('/dealerku', [DealerController::class, 'dealerku']);
        Route::get('/pegawai', [DealerController::class, 'pegawai']);
        Route::get('/antrian', [DealerController::class, 'antrian']);
        Route::get('/sparepart', [DealerController::class, 'sparepart']);
        Route::get('/servis', [DealerController::class, 'servis']);
        Route::get('/transaksi', [DealerController::class, 'transaksi']);
    });
});

Route::middleware(['auth', 'role:customer'])->group(function () {
    Route::get('/customer/dashboard', function () {
        return view('dashboard');
    })->name('customer.dashboard');
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
    Route::get('/form', function () {
        return view('user.form');
    });
    Route::get('/form2', function () {
        return view('user.form2');
    });
});
