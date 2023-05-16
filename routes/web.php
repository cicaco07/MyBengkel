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

Route::get('/dealer/dashboard', function(){
    return view('dealer.dashboard');
});

Route::prefix('mechanic')->group(function() {
    Route::get('/dashboard', [MechanicController::class, 'dashboard'])->name('dashboard');
    Route::get('/profilku', [MechanicController::class, 'profilku']);
    Route::get('/antrian', [MechanicController::class, 'antrian']);
    Route::get('/servisku', [MechanicController::class, 'servisku']);
});