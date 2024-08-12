<?php

use App\Http\Controllers\Admin\PanelController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\PortfolioController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PortfolioController::class, 'index'])->name('portfolio');

Route::get('/admin/login', [LoginController::class, 'index'])->name('login.view');
Route::post('/admin/login', [LoginController::class, 'authenticate'])->name('login');

Route::middleware(['auth'])->group(function () {
    Route::prefix('/admin-panel')->group(function () {
        Route::get('/', [PanelController::class, 'index'])->name('admin.index');
        Route::delete('/delete/{projectId}', [PanelController::class, 'delete'])->name('admin.delete');
        Route::get('/edit/{projectId}', [PanelController::class, 'edit'])->name('admin.edit');
        Route::patch('/edit/{projectId}', [PanelController::class, 'update'])->name('admin.update');
    });
});
