<?php

namespace App\Repositorys;

use App\Interfaces\ICategoriaInterface;
use App\Models\Categoria;

class CategoriaRepositoryEloquent implements ICategoriaInterface {
    public function create($dados): Categoria{
        return Categoria::create($dados);
    }

        public function view($id): Categoria
    {
        return Categoria::find($id);
    }

        public function update(int $id, array $dados): Categoria{
        $categoria = Categoria::findOrFail($id);

        $categoria->update($dados);

        return $categoria;
    }
}