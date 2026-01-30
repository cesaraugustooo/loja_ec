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

        $avaliacao = $service->create($validated);

        return response()->json($avaliacao,201);
    }
    

    public function view(Venda $avaliacao, VendaService $service){
        return response()->json($avaliacao->load(['quantidade','vendedor_id','user_id', 'produto_id']),200);
    }

    public function update(VendaRequest $request, VendaService $service, Venda $avaliacao){
        
        $this->authorize('update',$avaliacao);

        $avaliacao = $service->update($avaliacao,$request->validated());

        return response()->json($avaliacao,200);
    }
}   

