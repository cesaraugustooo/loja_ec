<?php

namespace App\Http\Controllers;

use App\Services\PagamentoService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class PagamentoController extends Controller
{
    public function create(Request $request, PagamentoService $pagamentoService)
    {
        $pagamentoId = $request->hookMetadata['pagamento_id'] ?? null;

        if ($pagamentoId) {
            $pagamentoService->confirmPayment(
                (int) $pagamentoId,
                (string) $request->paymentIntent
            );
        }

        return response()->json(['status' => 'success']);
    }
}
