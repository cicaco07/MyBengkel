<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

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