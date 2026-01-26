<?php

namespace App\Http\Controllers;

use App\Http\Requests\VendedorRequest;
use App\Models\vendedores;
use App\Services\VendedorService;
use Illuminate\Http\Request;

class VendedorController extends Controller
{
    public function store(VendedorRequest $request, VendedorService $vendedorService){
        $user_id = $request->user()->id;

        $dados = $request->validated();

        $dados['user_id'] = $user_id;

        $vendedor = $vendedorService->create($dados);

        return response()->json($vendedor);
    }

    public function view(vendedores $vendedor) {
        return response()->json($vendedor);
    }
}
