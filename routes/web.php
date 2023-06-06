<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\DealerController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\MechanicController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SparepartController;

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
        Route::put('/datauser/update/{id}', [AdminController::class, 'updateUser'])->name('admin.updateUser');
        Route::delete('/datadealer/delete/{id}', [AdminController::class, 'destroyDealer'])->name('admin.destroyDealer');
        Route::get('/datauser', [AdminController::class, 'dataUser'])->name('admin.dataUser');
        Route::get('/datadealer', [AdminController::class, 'dataDealer'])->name('admin.dataDealer');
        Route::put('/datadealer/update/{id}', [AdminController::class, 'updateDealer'])->name('admin.updateDealer');
        Route::post('/datadealer/create', [AdminController::class, 'createDealer'])->name('admin.createDealer');
        Route::get('/datamechanic', [AdminController::class, 'dataMechanic'])->name('admin.dataMechanic');
        Route::post('/datamechanic/create', [AdminController::class, 'createMechanic'])->name('admin.createMechanic');
        Route::delete('/datamechanic/delete/{id}', [AdminController::class, 'destroyMechanic'])->name('admin.destroyMechanic');
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
        Route::get('/datapegawai', [DealerController::class, 'pegawai']);
        Route::get('/antrian', [DealerController::class, 'antrian']);
        Route::get('/datasparepart', [DealerController::class, 'sparepart'])->name('dealer.sparepart');
        Route::post('/datasparepart', [SparepartController::class, 'store'])->name('sparepart.store');
        Route::delete('/sparepart/{id}', [SparepartController::class, 'delete'])->name('sparepart.delete');
        Route::get('/servis', [DealerController::class, 'servis']);
        Route::get('/transaksi', [DealerController::class, 'transaksi']);
        Route::put('/dealerku/update', [DealerController::class, 'update'])->name('dealer.update');
    });
});

Route::middleware(['auth', 'role:customer'])->group(function () {
    Route::prefix('customer')->group(function(){
        Route::get('/dashboard', [CustomerController::class, 'dashboard'])->name('customer.dashboard');
        Route::get('/yamaha', [CustomerController::class, 'yamaha'])->name('dealer.yamaha');
        Route::get('/detailDealer/{id}', [DealerController::class, 'show'])->name('dealer.show');
        Route::post('/detailDealer/{id}/create', [ServiceController::class, 'create'])->name('customer.createService');
        Route::get('/honda', [CustomerController::class, 'honda'])->name('dealer.honda');
        Route::get('/suzuki', [CustomerController::class, 'suzuki'])->name('dealer.suzuki');
        Route::get('/servisku', [CustomerController::class, 'allservisku'])->name('customer.allservisku');
        Route::get('/servisku2', [CustomerController::class, 'servisku2']);
        Route::get('/form', [CustomerController::class, 'form']);
        Route::get('/form2', [CustomerController::class, 'form2']);
        Route::get('/profilku', [CustomerController::class, 'profilku']);
        Route::put('/profilku/update', [CustomerController::class, 'update'])->name('customer.update');
        Route::delete('/servisku/delete/{id}', [ServiceController::class, 'destroyService'])->name('customer.destroyServisku');
        
    });
});
