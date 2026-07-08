<?php

use App\Http\Controllers\Admin\DashboarController;
use App\Http\Controllers\Admin\DatasetController;
use App\Http\Controllers\Admin\KategoriDokumenController;
use App\Http\Controllers\Admin\PenggunaController;
use App\Http\Controllers\Admin\RiwayatPrediksiController;
use App\Http\Controllers\Admin\TrainingModelController;
use Illuminate\Support\Facades\Route;


Route::get('/', [DashboarController::class, 'index']);
Route::resource('/pengguna', PenggunaController::class);
Route::resource('/kategori-dokumen', KategoriDokumenController::class);
Route::resource('/dataset', DatasetController::class);
Route::post('/dataset/import',[DatasetController::class, 'import' ]);
Route::resource('/training', TrainingModelController::class);
Route::resource('/riwayat-prediksi', RiwayatPrediksiController::class);