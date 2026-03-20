<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Services\PagamentoServive;
use Stripe\Webhook;

class PagamentoController extends Controller
{
    public function create(Request $request)
    {
        Log::info("Log de Stripe", ["request => $request->hookMetadata"]);
        return $request;
    }
}
