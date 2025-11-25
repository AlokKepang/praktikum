<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\IndexController;
use App\http\Controllers\wisataController;
use App\http\Controllers\AboutController;

Route::get('/', function () {
    return view('index');
});

Route::get('/index', [IndexController::class, 'index']);
Route::get('/wisata', [WisataController::class, 'wisata']);
Route::get('/about', [AboutController::class, 'about']);