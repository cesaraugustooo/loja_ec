<?php

use App\Http\Controllers\VendedorController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/vendedores', [VendedorController::class, 'store'])->middleware('auth:sanctum');
Route::get('/vendedores/{vendedor}', [VendedorController::class, 'view']);