<?php

use App\Http\Controllers\AdminKategoriController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::resource('adminkategori',AdminKategoriController::class);
