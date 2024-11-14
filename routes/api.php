<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\CustomerController;

Route::prefix('v1')->group(function () {

    Route::resource('customer', CustomerController::class);

    Route::get('/test', function () {
        return view('welcome');
    });
});