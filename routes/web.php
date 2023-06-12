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

require __DIR__.'/admin.php';

require __DIR__.'/customer.php';

require __DIR__.'/dealer.php';

require __DIR__.'/mechanic.php';