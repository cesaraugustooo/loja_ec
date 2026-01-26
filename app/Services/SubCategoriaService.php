<?php

namespace App\Services;

use App\Interfaces\ISubCategoriaInterface;

class SubCategoriaService {
    public function __construct(
        private ISubCategoriaInterface $sub_categoriaRepository
    ) {}

    public function create($dados) {
        $sub_categoria = $this->sub_categoriaRepository->create($dados);

        return $sub_categoria;
    }

    public function view($id) {
        return $this->sub_categoriaRepository->view($id);
    }
}