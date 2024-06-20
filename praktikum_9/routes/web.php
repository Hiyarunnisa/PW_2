<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PegawaiController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin', [AdminController::class, 'index'])-> name('admin');
Route::get('/admin/pasien', [AdminController::class, 'pasien']);
Route::get('/pegawai', [PegawaiController::class, 'index']);

