<?php

use App\Http\Controllers\AdminKategoriController;
use App\Http\Controllers\AdminLayananController;
use App\Http\Controllers\AdminLaporanController;
use App\Http\Controllers\AdminPelangganController;
use App\Http\Controllers\PelangganController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin', function() {
        return view('admin');
    })->name('admin.dashboard');
});

Route::middleware(['auth', 'role:pelanggan'])->group(function () {
    Route::get('/user', function() {
        return view('pelanggan');
    })->name('user');
});
Route::resource('adminkategori', AdminKategoriController::class);
Route::resource('adminlayanan', AdminLayananController::class);
Route::resource('adminlaporan', AdminLaporanController::class);
Route::resource('adminpelanggan', AdminPelangganController::class);
Route::resource('pelanggan', PelangganController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


