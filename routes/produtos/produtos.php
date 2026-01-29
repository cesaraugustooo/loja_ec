<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProdutoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->group(function () {
    Route::post("/produtos",[ProdutoController::class,'store']);
    Route::put("/produtos/{produto}",[ProdutoController::class,'update']);
});

Route::get('/produtos/{produto}',[ProdutoController::class,'view']);