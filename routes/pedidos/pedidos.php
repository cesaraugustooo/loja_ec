<?php

use App\Http\Controllers\PedidoController;
use Illuminate\Support\Facades\Route;

Route::post("/pedidos",[PedidoController::class, "store"])->middleware('auth:sanctum');
Route::get("/pedidos",[PedidoController::class, "meusPedidos"])->middleware('auth:sanctum');