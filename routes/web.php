<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::prefix('/admin')->group(function() {
    include "_/admin.php";
});



Route::prefix('/pengguna')->group(function() {
    include "_/home.php";
});

Route::get('/add', [LoginController::class, 'test']);
Route::get('login', [LoginController::class, 'login'])->name('login');
Route::post('login', [LoginController::class, 'loginProcess']);
Route::get('logout', [LoginController::class, 'logout']);