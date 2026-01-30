<?php

namespace App\Services;

use App\Interfaces\IVendaInterface;

class VendaService {
    public function __construct(
        private IVendaInterface $vendaRepository
    ) {}

    public function create($dados) {
        $venda = $this->vendaRepository->create($dados);

        return $venda;
    }

    public function view($id) {
        return $this->vendaRepository->view($id);
    }

        public function atualizar(int $id, array $dados)
    {
        return $this->vendaRepository->update($id, $dados);
    }
}