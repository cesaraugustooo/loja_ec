<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProdutoRequest;
use App\Http\Requests\UpdateProdutos;
use App\Models\Produto;
use App\Services\ProdutoService;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    use AuthorizesRequests;
    public function index(){

    }
    public function store(ProdutoRequest $request, ProdutoService $service){
        $validated = $request->validated();
        $validated['user_id'] = $request->user()->id;

        $produto = $service->create($validated);

        return response()->json($produto,201);
    }
    

    public function view(Produto $produto, ProdutoService $service){
        return response()->json($produto->load(['vendedor','sub_categoria.categoria','avaliacoes']),200);
    }

    public function update(UpdateProdutos $request, ProdutoService $service, Produto $produto){
        
        $this->authorize('update',$produto);

        $produto = $service->update($produto,$request->validated());

        return response()->json($produto,200);
    }
}   

