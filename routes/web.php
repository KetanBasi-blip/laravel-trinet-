<?php

use App\Http\Controllers\ProfileController;

//buat namabah route barang//
use App\Http\Controllers\BarangController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

Route::prefix('barang')->group(function () {
    Route::get('/kode-inventaris', [BarangController::class, 'kode'])->name('barang.kode');
    Route::get('/nama-barang', [BarangController::class, 'nama'])->name('barang.nama');
    Route::get('/kategori', [BarangController::class, 'kategori'])->name('barang.kategori');
    Route::get('/merek-tipe', [BarangController::class, 'merek'])->name('barang.merek');
    Route::get('/nomor-seri', [BarangController::class, 'serial'])->name('barang.serial');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');





Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');





});

require __DIR__.'/auth.php';
