<?php

use App\Http\Controllers\CategoriaController;
use Illuminate\Support\Facades\Route;

Route::get("/categoria",[CategoriaController::class, "index"])->middleware('auth:sanctum');
Route::get("/categoria/{id}",[CategoriaController::class, "view"])->middleware('auth:sanctum');
Route::post("/categoria",[CategoriaController::class, "store"])->middleware('auth:sanctum');