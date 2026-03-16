<?php

namespace App\Repositorys;

use App\Interfaces\IAvaliacaoInterface;
use App\Models\Avaliacao;
use App\Models\Produto;
use Illuminate\Database\Eloquent\Collection;

class AvaliacaoRepositoryEloquent implements IAvaliacaoInterface {
    public function index(Produto $produto): Collection {
        return Avaliacao::where('produtos_id', $produto->id)->get();
    }

    public function userJaAvaliouProduto(int $userId, int $produtoId): bool {
        return Avaliacao::where('user_id', $userId)
            ->where('produtos_id', $produtoId)
            ->exists();
    }

    public function create($dados): Avaliacao{
        return Avaliacao::create($dados);
    }

    public function view(Avaliacao $avaliacao): Avaliacao {
        return $avaliacao->load(['user', 'produto']);
    }

    public function update(Avaliacao $avaliacao, array $dados): Avaliacao{
        $avaliacao->update($dados);
        return $avaliacao;
    }

    public function destroy(Avaliacao $avaliacao): void {
        $avaliacao->delete();
    }
}