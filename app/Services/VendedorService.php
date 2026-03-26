<?php

namespace App\Services;

use App\Interfaces\IVendedorInterface;
use App\Models\Vendedor;

class VendedorService
{
    public function __construct(
        private IVendedorInterface $vendedorRepository
    ) {}

    public function create($dados)
    {
        $vendedor = $this->vendedorRepository->create($dados);

        return $vendedor;
    }

    public function view($id)
    {
        return $this->vendedorRepository->view($id);
    }

    public function atualizar(Vendedor $vendedor, array $dados): Vendedor
    {
        return $this->vendedorRepository->update($vendedor, $dados);
    }
}
