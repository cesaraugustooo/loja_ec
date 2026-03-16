<?php

use App\Http\Controllers\AvaliacaoController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/produtos/{produto}/avaliacoes', [AvaliacaoController::class, 'index']);
    Route::post('/avaliacoes', [AvaliacaoController::class, 'store']);
    Route::get('/avaliacoes/{avaliacao}', [AvaliacaoController::class, 'view']);
    Route::put('/avaliacoes/{avaliacao}', [AvaliacaoController::class, 'update']);
    Route::delete('/avaliacoes/{avaliacao}', [AvaliacaoController::class, 'destroy']);
});
