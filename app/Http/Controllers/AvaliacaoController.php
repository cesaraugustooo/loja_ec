<?php

namespace App\Http\Controllers;

use App\Http\Requests\AvaliacaoRequest;
use App\Http\Requests\UpdateAvaliacaoRequest;
use App\Services\AvaliacaoService;
use App\Models\Avaliacao;
use App\Models\Produto;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;

class AvaliacaoController extends Controller
{
    use AuthorizesRequests;

    public function index(Produto $produto, AvaliacaoService $service)
    {
        return response()->json($service->index($produto), 200);
    }

    public function store(AvaliacaoRequest $request, AvaliacaoService $service)
    {
        $validated = $request->validated();
        $validated['user_id'] = $request->user()->id;

        $avaliacao = $service->create($validated);

        return response()->json($avaliacao, 201);
    }

    public function view(Avaliacao $avaliacao, AvaliacaoService $service)
    {
        $this->authorize('view', $avaliacao);

        $avaliacao = $service->view($avaliacao);

        return response()->json($avaliacao, 200);
    }

    public function update(UpdateAvaliacaoRequest $request, AvaliacaoService $service, Avaliacao $avaliacao)
    {
        $this->authorize('update', $avaliacao);

        $avaliacao = $service->update($avaliacao, $request->validated());

        return response()->json($avaliacao, 200);
    }

    public function destroy(Avaliacao $avaliacao, AvaliacaoService $service)
    {
        $this->authorize('delete', $avaliacao);

        $service->destroy($avaliacao);

        return response()->noContent();
    }
}
