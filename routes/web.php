<?php

use App\Http\Controllers\AtasanController;
use App\Http\Controllers\KendaraanController;
use App\Http\Controllers\PesananController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

    Route::get('/', function () {
        return view('home');
    })->name('dashboard');

    // user 
    Route::controller(UserController::class)->prefix('user')->group(function(){
        Route::get('index', 'index')->name('user.index');
        Route::get('create', 'create')->name('user.create');
        Route::post('store', 'store')->name('user.store');
        Route::get('show/{id}', 'show')->name('user.show');
        Route::get('edit/{id}', 'edit')->name('user.edit');
        Route::put('update/{id}', 'update')->name('user.update');
        Route::delete('delete/{id}', 'delete')->name('user.delete');
    });

    // atasan
    Route::controller(AtasanController::class)->prefix('atasan')->group(function(){
        Route::get('pesanan-atasan', 'index')->name('pesanan-atasan.index');
        Route::post('pesanan-atasan/update/{id}', 'acc')->name('pesanan-atasan.acc');
    });

    // kendaraan
    Route::controller(KendaraanController::class)->prefix('kendaraan')->group(function(){
        Route::get('index', 'index')->name('kendaraan.index');
        Route::get('create', 'create')->name('kendaraan.create');
        Route::post('store', 'store')->name('kendaraan.store');
        Route::get('edit/{kendaraan:nama_kendaraan}', 'edit')->name('kendaraan.edit');
        Route::put('update/{kendaraan:nama_kendaraan}', 'update')->name('kendaraan.update');
        Route::delete('delete/{kendaraan:nama_kendaraan}', 'destroy')->name('kendaraan.delete');
    });

    // pesanan
    Route::controller(PesananController::class)->prefix('pesanan')->group(function(){
        Route::get('index', 'index')->name('pesanan.index');
        Route::post('store', 'store')->name('pesanan.store');
        Route::get('show', 'show')->name('pesanan.show');
        Route::get('delete/{id}', 'destroy')->name('pesanan.delete');
    });

});

require __DIR__.'/auth.php';
