<?php

use App\Http\Controllers\SubCategoriaController;
use Illuminate\Support\Facades\Route;

Route::get("/sub_categoria",[SubCategoriaController::class, "view"])->middleware('auth:sanctum');
Route::post("/sub_categoria",[SubCategoriaController::class, "store"])->middleware('auth:sanctum');