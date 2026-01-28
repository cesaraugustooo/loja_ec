<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProdutoRequest;
use App\Services\ProdutoService;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function index(){

    }
    public function store(ProdutoRequest $request, ProdutoService $service){
        $validated = $request->validated();
        $validated['user_id'] = $request->user()->id;

        $produto = $service->create($validated);

        return response()->json($produto,201);
    }
    
}
