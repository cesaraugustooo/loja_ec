<?php

namespace App\Services;

use App\Interfaces\IVendaInterface;
use App\Models\Venda;

class VendaService
{
    public function __construct(
        private IVendaInterface $vendaRepository
    ) {}

    public function create($dados)
    {
        $venda = $this->vendaRepository->create($dados);

        return $venda;
    }

    public function atualizar(Venda $venda, array $dados)
    {
        return $this->vendaRepository->update($venda, $dados);
    }
}
