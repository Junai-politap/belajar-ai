<?php

use App\Http\Controllers\Admin\DashboarController;
use App\Http\Controllers\Admin\DatasetController;
use App\Http\Controllers\Admin\PenggunaController;
use App\Http\Controllers\Admin\RiwayatPrediksiController;
use App\Http\Controllers\Admin\TrainingModelController;
use Illuminate\Support\Facades\Route;


Route::get('/', [DashboarController::class, 'index']);
Route::resource('/pengguna', PenggunaController::class);
Route::resource('/dataset', DatasetController::class);
Route::resource('/training', TrainingModelController::class);
Route::resource('/riwayat-prediksi', RiwayatPrediksiController::class);