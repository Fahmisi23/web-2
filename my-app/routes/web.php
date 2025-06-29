<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\UnitKerjaController;
use app\Http\Controllers\PegawaiController;
use app\Http\Controllers\RuangController;
use app\Http\Controllers\PeminjamanController;


Route::get('/', function () {
    return view('welcome');
});


Route::get('/unit-kerja', [UnitKerjaController::class, 'index']);
Route::get('/pegawai', [PegawaiController::class, 'index']);
Route::get('/ruang', [RuangController::class, 'index']);
Route::get('/peminjaman', [PeminjamanController::class, 'index']);
