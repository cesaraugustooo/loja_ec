<?php

namespace App\Repositorys;

use App\Interfaces\IProdutoInterface;
use App\Models\produtos;
use App\Models\vendedores;

class ProdutoRepositoryEloquent implements IProdutoInterface {
    public function create($dados): produtos{
        return produtos::create($dados);
    }

        public function view($id): produtos
    {
        return produtos::find($id);
    }
}