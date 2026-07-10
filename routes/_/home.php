<?php

use App\Http\Controllers\Home\DashboarController;
use App\Http\Controllers\Home\PrediksiDokumenController;
use Illuminate\Support\Facades\Route;

Route::get('/', [DashboarController::class, 'index']);
Route::get('/riwayat-prediksi', [PrediksiDokumenController::class, 'index']);
Route::post('/riwayat-prediksi', [PrediksiDokumenController::class, 'store']);