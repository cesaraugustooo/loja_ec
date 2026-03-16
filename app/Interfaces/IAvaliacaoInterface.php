<?php

namespace App\Interfaces;

use App\Models\Avaliacao;
use App\Models\Produto;
use Illuminate\Database\Eloquent\Collection;

interface IAvaliacaoInterface {
    public function index(Produto $produto): Collection;

    public function userJaAvaliouProduto(int $userId, int $produtoId): bool;

    public function create($dados): Avaliacao;

    public function view(Avaliacao $avaliacao): Avaliacao;

    public function update(Avaliacao $avaliacao, array $dados): Avaliacao;

    public function destroy(Avaliacao $avaliacao): void;
}
