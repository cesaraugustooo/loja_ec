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

    public function meusPedidos(Request $request, PedidoService $pedidoService){
        return response()->json($pedidoService->meusPedidos($request->user()->id));
    }

    public function update(UpdatePedido $request, PedidoService $service, Pedido $pedido){
        
        $this->authorize('update',$pedido);

        $pedido = $service->update($pedido,$request->validated());

        return response()->json($pedido,200);
    }

    public function destroy(Pedido $pedido, PedidoService $pedidoService){
        $this->authorize('destroy',$pedido);

        $pedidoService->destroy($pedido);

        return response()->noContent();
    }
}
