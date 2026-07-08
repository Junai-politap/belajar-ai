<?php

use App\Http\Controllers\Home\DashboarController;
use Illuminate\Support\Facades\Route;

Route::get('/', [DashboarController::class, 'index']);