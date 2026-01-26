<?php

namespace App\Services;

use App\Interfaces\ICategoriaInterface;

class CategoriaService {
    public function __construct(
        private ICategoriaInterface $categoriaRepository
    ) {}

    public function create($dados) {
        $categoria = $this->categoriaRepository->create($dados);

        return $categoria;
    }

    public function view($id) {
        return $this->categoriaRepository->view($id);
    }
}