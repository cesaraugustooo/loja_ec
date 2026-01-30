<?php

namespace App\Http\Controllers;

use App\Http\Requests\AvaliacaoRequest;
use App\Http\Requests\UpdateProdutos;
// use App\Models\AvaliacaoController;
use App\Services\AvaliacaoService;
use App\Models\Avaliacao;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;

class AvaliacaoController extends Controller
{
    use AuthorizesRequests;
    public function index(){

    }
    public function store(AvaliacaoRequest $request, AvaliacaoService $service){
        $validated = $request->validated();
        $validated['user_id'] = $request->user()->id;

        $avaliacao = $service->create($validated);

        return response()->json($avaliacao,201);
    }
    

    public function view(Avaliacao $avaliacao, AvaliacaoService $service){
        return response()->json($avaliacao->load(['nota','user_id','produto_id']),200);
    }

    public function update(UpdateProdutos $request, AvaliacaoService $service, Avaliacao $avaliacao){
        
        $this->authorize('update',$avaliacao);

        $avaliacao = $service->update($avaliacao,$request->validated());

        return response()->json($avaliacao,200);
    }
}   

