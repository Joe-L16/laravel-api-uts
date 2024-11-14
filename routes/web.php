<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome'); // Atau halaman utama aplikasi Anda
});

Route::get('/products', [ProductController::class, 'index']);
