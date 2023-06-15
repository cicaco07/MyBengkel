<?php

use App\Http\Controllers\DealerController;
use App\Http\Controllers\SparepartController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth', 'role:dealer'])->group(function () {
    Route::prefix('dealer')->group(function(){
        Route::get('/dashboard', [DealerController::class, 'dashboard'])->name('dealer.dashboard');
        Route::get('/dealerku', [DealerController::class, 'dealerku']);
        Route::get('/pegawai', [DealerController::class, 'pegawai']);
        Route::get('/datapegawai', [DealerController::class, 'pegawai']);
        Route::put('/datapegawai/update/{id}', [DealerController::class, 'updateMekanik'])->name('dealer.updateMekanik');        
        Route::get('/antrian', [DealerController::class, 'antrian']);
        Route::get('/datasparepart',  [SparePartController::class, 'index'])->name('spareparts.index');
        Route::post('/datasparepart', [SparepartController::class, 'store'])->name('sparepart.store');
        Route::get('/spareparts/search', [SparePartController::class, 'search'])->name('spareparts.search');
        Route::get('/spareparts/clear-search', [SparePartController::class, 'clearSearch'])->name('spareparts.clear-search');
        Route::put('/datasparepart/update/{id}', [SparepartController::class, 'update'])->name('sparepart.update');
        Route::delete('/sparepart/{id}', [SparepartController::class, 'delete'])->name('sparepart.delete');
        Route::get('/servis', [DealerController::class, 'servis']);
        Route::get('/transaksi', [DealerController::class, 'transaksi']);
        Route::put('/dealerku/update', [DealerController::class, 'update'])->name('dealer.update');
        Route::delete('/datapegawai/delete/{id}', [DealerController::class, 'deleteMekanik'])->name('dealer.deleteMekanik');
        Route::get('/antrian/{id}', [DealerController::class, 'antrian'])->name('dealer.antrian');
        Route::get('/search', [DealerController::class, 'search'])->name('dealer.search');

    });
});