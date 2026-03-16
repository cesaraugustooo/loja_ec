<?php

namespace App\Http\Controllers;

use App\Http\Requests\PedidoRequest;
use App\Http\Requests\UpdatePedido;
use App\Services\PedidoService;
use App\Models\Pedido;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class PedidoController extends Controller
{
    use AuthorizesRequests;

    public function store(PedidoRequest $request, PedidoService $pedidoService){
        $validated = $request->validated();
        $validated['user_id'] = $request->user()->id;

        $pedido = $pedidoService->create($validated);

        return response()->json($pedido);
    }

    public function meusPedidos(Request $request, PedidoService $pedidoService){
        return response()->json($pedidoService->meusPedidos($request->user()->id));
    }

    public function update(UpdatePedido $request, PedidoService $service, Pedido $pedido){
        
        $this->authorize('update', $pedido);

        $pedido = $service->update($pedido, $request->validated());

        return response()->json($pedido, 200);
    }
}
