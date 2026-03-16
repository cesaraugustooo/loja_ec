<?php

namespace App\Services;

use App\Interfaces\IAvaliacaoInterface;
use App\Models\Avaliacao;
use App\Models\Produto;
use Illuminate\Database\Eloquent\Collection;

class AvaliacaoService {
    public function __construct(
        private IAvaliacaoInterface $avaliacaoRepository
    ) {}

    public function index(Produto $produto): Collection {
        return $this->avaliacaoRepository->index($produto);
    }

    public function create($dados): Avaliacao {
        $jaAvaliou = $this->avaliacaoRepository->userJaAvaliouProduto($dados['user_id'], $dados['produtos_id']);

        if ($jaAvaliou) {
            throw new \App\Exceptions\ConflictException('Você já avaliou este produto.');
        }

        $avaliacao = $this->avaliacaoRepository->create($dados);

        return $avaliacao;
    }

    public function view(Avaliacao $avaliacao): Avaliacao {
        return $this->avaliacaoRepository->view($avaliacao);
    }

    public function update(Avaliacao $avaliacao, array $dados): Avaliacao {
        return $this->avaliacaoRepository->update($avaliacao, $dados);
    }

    public function destroy(Avaliacao $avaliacao): void {
        $this->avaliacaoRepository->destroy($avaliacao);
    }
}