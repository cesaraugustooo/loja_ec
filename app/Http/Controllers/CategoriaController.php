<?php
namespace App\Http\Controllers;

use App\Http\Requests\CategoriaRequest;
use App\Services\CategoriaService;
use App\Models\Categoria;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    use AuthorizesRequests;
    public function index() {}

    public function store (CategoriaRequest $request, CategoriaService $service)
    {
        $validated = $request->validated();
        $validated = ['user_id'] = $request->user()->id;

        $categoria = $service->create($validated);

        return response()->json($categoria, 201);
    }

    public function view(Categoria $categoria, CategoriaService $service)
    {
        return response()->json($categoria->load(['nome']), 200);
    }

    public function update(CategoriaRequest $request, CategoriaService $service, Categoria $categoria)
    {

        $this->authorize('update', $categoria);

        $categoria = $service->atualizar($categoria, $request->validated());

        return response()->json($categoria, 200);
    }
}