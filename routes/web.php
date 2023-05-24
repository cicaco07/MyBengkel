<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\DealerController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\CustomerController;
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
Route::redirect('/', '/login');

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('registerForm');
Route::post('/register-validate', [RegisterController::class, 'register'])->name('registerValidate');

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('loginForm');
Route::post('/login-validate', [LoginController::class, 'login'])->name('loginValidate');

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::prefix('admin')->group(function(){
        Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
        Route::get('/data', [AdminController::class, 'data']);
        Route::get('/tambah', [AdminController::class, 'tambah']);
    });
});

Route::middleware(['auth', 'role:mechanic'])->group(function () {
    Route::prefix('mechanic')->group(function(){
        Route::get('/dashboard', [MechanicController::class, 'dashboard'])->name('mechanic.dashboard');
        Route::get('/profilku', [MechanicController::class, 'profilku']);
        Route::put('/profilku/update', [MechanicController::class, 'update'])->name('mechanic.update');
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
    Route::prefix('customer')->group(function(){
        Route::get('/dashboard', [CustomerController::class, 'dashboard'])->name('customer.dashboard');
        Route::get('/yamaha', [CustomerController::class, 'yamaha']);
        Route::get('/honda', [CustomerController::class, 'honda']);
        Route::get('/suzuki', [CustomerController::class, 'suzuki']);
        Route::get('/servisku', [CustomerController::class, 'servisku']);
        Route::get('/servisku2', [CustomerController::class, 'servisku2']);
        Route::get('/form', [CustomerController::class, 'form']);
        Route::get('/form2', [CustomerController::class, 'form2']);
        Route::get('/profilku', [CustomerController::class, 'profilku']);
        Route::put('/profilku/update', [CustomerController::class, 'update'])->name('customer.update');
    });
});
