<?php

namespace App\Http\Controllers;

use App\Services\SubCategoriaService;
use App\Models\Sub_categoria;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use App\Http\Requests\SubCategoriaRequest;

class SubCategoriaController extends Controller
{
    use AuthorizesRequests;
    public function index(SubCategoriaService $services)
    {
        return response()->json($services->index(), 200);
    }

    public function store(SubCategoriaRequest $request, SubCategoriaService $service)
    {
        $validated = $request->validated();

        $sub_categoria = $service->create($validated);

        return response()->json($sub_categoria, 201);
    }

    public function view(Sub_categoria $sub_categoria, SubCategoriaService $service)
    {
        return response()->json($sub_categoria->load(['categorias']), 200);
    }

    public function update(SubCategoriaRequest $request, SubCategoriaService $service, Sub_categoria $sub_categoria)
    {

        $this->authorize('update', $sub_categoria);

        $sub_categoria = $service->atualizar($sub_categoria, $request->validated());

        return response()->json($sub_categoria, 200);
    }

    public function destroy(Sub_categoria $sub_categoria, SubCategoriaService $service)
    {
        $this->authorize('delete', $sub_categoria);

        $service->deletar($sub_categoria);

        return response()->json([], 204);
    }
}
