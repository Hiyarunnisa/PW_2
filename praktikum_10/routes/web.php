<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\KelurahanController;
use App\Http\Controllers\UnitkerjaController;
use App\Http\Controllers\ParamedikController;
use App\Http\Controllers\PeriksaController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin', [AdminController::class, 'index'])-> name('admin');
Route::get('/admin/pasien-list', [PasienController::class, 'index'])->name('admin.pasien');
Route::get('/admin/kelurahan-list', [KelurahanController::class, 'index'])->name('admin.kelurahan');
Route::get('/admin/unitkerja-list', [UnitkerjaController::class, 'index'])->name('admin.unitkerja');
Route::get('/admin/paramedik-list', [ParamedikController::class, 'index'])->name('admin.paramedik');
Route::get('/admin/periksa-list', [PeriksaController::class, 'index'])->name('admin.periksa');