<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\OtpController;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/login');

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('registerForm');
Route::post('/register-validate', [RegisterController::class, 'register'])->name('registerValidate');

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('loginForm');
Route::post('/login-validate', [LoginController::class, 'login'])->name('loginValidate');

Route::get('/otp', [OtpController::class, 'showView'])->name('showView');
Route::post('/otp/generate', [OtpController::class, 'generate'])->name('generate');
Route::get('/otp/verification/{user_id}', [OtpController::class, 'verification'])->name('otp.verification');
Route::post('/otp/login', [OtpController::class, 'loginWithOtp'])->name('loginWithOtp');


Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

require __DIR__.'/admin.php';

require __DIR__.'/customer.php';

require __DIR__.'/dealer.php';

require __DIR__.'/mechanic.php';