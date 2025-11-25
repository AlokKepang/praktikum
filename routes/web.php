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
    Route::get('/wisata', [AdminController::class, 'wisata'])->name('admin.wisata');
});