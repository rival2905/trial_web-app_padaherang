<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\PesanController;
use App\Http\Controllers\KategoriController;


// Route login
Route::get('/', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');

// Route yang memerlukan authentication
Route::middleware(['auth'])->group(function () {

    Route::get('/home', [HomeController::class, 'index'])->name('home');

    Route::prefix('kontak')->group(function () {
        Route::get('/', [KontakController::class, 'index'])->name('kontak');
        Route::post('/', [KontakController::class, 'store'])->name('kontak.store');
        Route::get('/detail/{name}', [KontakController::class, 'detail_biodata'])->name('kontak.detail');
    });

    Route::prefix('store')->group(function () {
        Route::get('/', [KontakController::class, 'index'])->name('store');
        Route::post('/kirim-pesan', [PesanController::class, 'store'])->name('pesan.store');
        Route::get('/detail/{name}', [KontakController::class, 'detail_biodata'])->name('pesan.store.detail');
    });

    Route::get('/about', [AboutController::class, 'index'])->name('about');

    Route::prefix('galeri')->group(function () {
    Route::get('/', [GaleriController::class, 'index'])->name('galeri');
    Route::get('/create', [GaleriController::class, 'create'])->name('galeri.create');
    Route::post('/store', [GaleriController::class, 'store'])->name('galeri.store');
    Route::get('/detail/{id}', [GaleriController::class, 'detail_two'])->name('galeri.detail');
    Route::get('/{id}/edit', [GaleriController::class, 'edit'])->name('galeri.edit');
    Route::put('/{id}', [GaleriController::class, 'update'])->name('galeri.update');
    Route::delete('/{id}', [GaleriController::class, 'destroy'])->name('galeri.destroy');
});


    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::prefix('contact')->group(function () {
        Route::get('/', [KontakController::class, 'index_two'])->name('contact');
        Route::get('/detail/{id}', [KontakController::class, 'detail_two'])->name('contact.detail');
        Route::get('/create', [KontakController::class, 'create'])->name('contact.create');
        Route::post('/store', [KontakController::class, 'store'])->name('contact.store');
        Route::get('/edit/{id}', [KontakController::class, 'edit'])->name('contact.edit');
        Route::post('/update/{id}', [KontakController::class, 'update'])->name('contact.update');
    });
    Route::prefix('kategori')->group(function () {
    Route::get('/', [KategoriController::class, 'index'])->name('kategori');
    Route::post('/store', [KategoriController::class, 'store'])->name('kategori.store');
});


});
