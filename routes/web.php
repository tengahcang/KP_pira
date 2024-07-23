<?php

use App\Http\Controllers\AdminKategoriController;
use App\Http\Controllers\AdminLayananController;
use App\Http\Controllers\AdminLaporanController;
use App\Http\Controllers\AdminPelangganController;
use App\Http\Controllers\PelangganController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::resource('adminkategori', AdminKategoriController::class);
Route::resource('adminlayanan', AdminLayananController::class);
Route::resource('adminlaporan', AdminLaporanController::class);
Route::resource('adminpelanggan', AdminPelangganController::class);
Route::resource('pelanggan', PelangganController::class);
