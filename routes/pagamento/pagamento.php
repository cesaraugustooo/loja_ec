<?php

use App\Http\Controllers\PagamentoController;
use Illuminate\Support\Facades\Route;

Route::post("/webhook/payment-success", [PagamentoController::class, 'create'])->middleware('PaymentGatewayWebHook');
