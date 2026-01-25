<?php

namespace App\Services;

use App\Interfaces\IVendedorInterface;

class VendedorService {
    public function __construct(
        private IVendedorInterface $vendedorRepository
    ) {}

    public function create($dados) {
        $vendedor = $this->vendedorRepository->create($dados);

        return $vendedor;
    }

    public function view($id) {
        return $this->vendedorRepository->view($id);
    }
}