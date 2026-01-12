<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\AboutController;

// Route untuk halaman login
Route::get('/', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');

// Route yang memerlukan authentication
Route::middleware(['auth'])->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/kontak', [KontakController::class, 'index'])->name('kontak');
    Route::post('/kontak', [KontakController::class, 'store'])->name('kontak.store');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
     Route::get('/about', [AboutController::class, 'index'])->name('about');
});