<?php

use Illuminate\Support\Facades\Route;

Route::prefix('/admin')->group(function() {
    include "_/admin.php";
});


Route::get('/', function () {
    return view('components.home');
});