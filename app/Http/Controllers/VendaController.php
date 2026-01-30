<?php

namespace App\Http\Controllers;

use App\Http\Requests\VendaRequest;

use App\Services\VendaService;
use App\Models\Venda;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;

class VendaController
 extends Controller
{
    use AuthorizesRequests;
    public function index(){

    }
    public function store(VendaRequest $request, VendaService $service){
        $validated = $request->validated();
        $validated['user_id'] = $request->user()->id;

        $venda = $service->create($validated);

        return response()->json($venda,201);
    }
    

    public function view(Venda $venda, VendaService $service){
        return response()->json($venda->load(['quantidade','vendedor_id','user_id', 'produto_id']),200);
    }

    public function update(VendaRequest $request, VendaService $service, Venda $venda){
        
        $this->authorize('update',$venda);

        $venda = $service->update($venda,$request->validated());

        return response()->json($venda,200);
    }
}   

