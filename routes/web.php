<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\AboutController;

// Route login
Route::get('/', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');

// Route yang memerlukan authentication
Route::middleware(['auth'])->group(function () {

    Route::get('/home', [HomeController::class, 'index'])->name('home');

    Route::get('/kontak', [KontakController::class, 'index'])->name('kontak');
    Route::post('/kontak', [KontakController::class, 'store'])->name('kontak.store');
    Route::get('/kontak/detail/{name}', [KontakController::class, 'detail_biodata'])->name('kontak.detail');

    Route::post('/kirim-pesan', [PesanController::class, 'store'])->name('pesan.store');


    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/about', [AboutController::class, 'index'])->name('about');

    // ✅ route view sederhana
    Route::get('/nadin', function () {
        return view('nadin');
    });

    Route::get('/resti', function () {
        return view('resti');
    });

    Route::get('/riskia', function () {
        return view('riskia');
    });

    Route::get('/zahra', function () {
        return view('zahra');
    });

});
