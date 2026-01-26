<?php

namespace App\Repositorys;

use App\Interfaces\IProdutoInterface;
use App\Models\Produto;


class ProdutoRepositoryEloquent implements IProdutoInterface {
    public function create($dados): Produto{
        return Produto::create($dados);
    }

        public function view($id): Produto
    {
        return Produto::find($id);
    }
}