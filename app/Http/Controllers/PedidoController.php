<?php

namespace App\Http\Controllers;

use App\Http\Requests\PedidoRequest;
use App\Services\PedidoService;
use Illuminate\Http\Request;

class PedidoController extends Controller
{
    public function store(PedidoRequest $request, PedidoService $pedidoService){
        $validated = $request->validated();
        $validated['user_id'] = $request->user()->id;

        $pedido = $pedidoService->create($validated);

        return response()->json($pedido);
    }
}
