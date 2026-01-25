<?php

namespace App\Services;

use App\Interfaces\IProdutoInterface;


class ProdutoService {
    public function __construct(
        private IProdutoInterface $produtoRepository
    ) {}


    public function create($dados){
        $produto = $this->produtoRepository->create($dados);
        return $produto;
    }

    public function view($id) {
        return $this->produtoRepository->view($id);
    }
}
