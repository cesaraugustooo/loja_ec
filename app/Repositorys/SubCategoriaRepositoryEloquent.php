<?php

namespace App\Repositorys;

use App\Interfaces\ISubCategoriaInterface;
use App\Models\Sub_categoria;

class SubCategoriaRepositoryEloquent implements ISubCategoriaInterface {
    public function create($dados): Sub_categoria{
        return Sub_categoria::create($dados);
    }

        public function view($id): Sub_categoria
    {
        return Sub_categoria::find($id);
    }
}