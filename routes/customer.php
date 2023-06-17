<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DealerController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;

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
        Route::get('/servisku/detailServis/{id}', [CustomerController::class, 'viewDetailService'])->name('customer.viewDetailService');
        Route::put('/servisku/update-service/{id}', [CustomerController::class, 'updateStatus'])->name('customer.updateStatus');
        
    }); 
});