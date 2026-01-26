<?php

namespace App\Repositorys;

use App\Interfaces\ICategoriaInterface;
use App\Models\categorias;

class CategoriaRepositoryEloquent implements ICategoriaInterface {
    public function create($dados): categorias{
        return categorias::create($dados);
    }

        public function view($id): categorias
    {
        return categorias::find($id);
    }
}