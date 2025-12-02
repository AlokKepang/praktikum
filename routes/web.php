<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\WisataController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;

Route::get('/', function () {
    return view('admin.dashboard');
});

Route::get('/index', [IndexController::class, 'index']);
Route::get('/wisata', [WisataController::class, 'wisata']);
Route::get('/about', [AboutController::class, 'about']);

// Admin Routes
Route::prefix('admin')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/home', [AdminController::class, 'home'])->name('admin.home');
    Route::get('/users', [AdminController::class, 'users'])->name('admin.users');
    
    // Wisata CRUD Routes
    Route::get('/wisata', [AdminController::class, 'wisata'])->name('admin.wisata');
    Route::get('/wisata/create', [AdminController::class, 'createWisata'])->name('admin.wisata.create');
    Route::post('/wisata/store', [AdminController::class, 'storeWisata'])->name('admin.wisata.store');
    Route::get('/wisata/{id}/edit', [AdminController::class, 'editWisata'])->name('admin.wisata.edit');
    Route::put('/wisata/{id}/update', [AdminController::class, 'updateWisata'])->name('admin.wisata.update');
    Route::delete('/wisata/{id}/delete', [AdminController::class, 'deleteWisata'])->name('admin.wisata.delete');
});