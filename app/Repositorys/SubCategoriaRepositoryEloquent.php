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

        public function update(int $id, array $dados): Sub_categoria{
        $sub_categoria = Sub_categoria::findOrFail($id);

        $sub_categoria->update($dados);

        return $sub_categoria;
    }
}