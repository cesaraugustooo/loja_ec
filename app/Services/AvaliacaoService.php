<?php

namespace App\Services;

use App\Interfaces\IAvaliacaoInterface;

class AvaliacaoService {
    public function __construct(
        private IAvaliacaoInterface $avaliacaoRepository
    ) {}

    public function create($dados) {
        $avaliacao = $this->avaliacaoRepository->create($dados);

        return $avaliacao;
    }

    public function view($id) {
        return $this->avaliacaoRepository->view($id);
    }
}