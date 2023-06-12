<?php

use App\Http\Controllers\MechanicController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth', 'role:mechanic'])->group(function () {
    Route::prefix('mechanic')->group(function(){
        Route::get('/dashboard', [MechanicController::class, 'dashboard'])->name('mechanic.dashboard');
        Route::get('/profilku', [MechanicController::class, 'profilku'])->name('mechanic.profilku');
        Route::put('/profilku/update', [MechanicController::class, 'update'])->name('mechanic.update');
        Route::get('/antrian', [MechanicController::class, 'antrian'])->name('mechanic.antrian');
        Route::get('/update-service/{id}', [MechanicController::class, 'updateService'])->name('mechanic.updateService');
        Route::put('/update-status/{id}', [MechanicController::class, 'updateStatus'])->name('mechanic.updateStatus');
        Route::get('/servisku', [MechanicController::class, 'servisku'])->name('mechanic.servisku');
    });
});