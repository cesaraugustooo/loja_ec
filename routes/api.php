<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

require base_path('routes/auth/auth.php');

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
