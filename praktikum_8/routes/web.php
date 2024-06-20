<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('profil', function () {
    return view('profil');
});

Route::get('/dashboard', [DashboardController::class, 'show']);
Route::get('/dashboard/laporan', [DashboardController::class, 'laporan']);

