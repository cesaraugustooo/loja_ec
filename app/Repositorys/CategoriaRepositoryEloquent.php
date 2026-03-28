<?php

namespace App\Repositorys;

use App\Interfaces\ICategoriaInterface;
use App\Models\Categoria;

class CategoriaRepositoryEloquent implements ICategoriaInterface
{
    public function index()
    {
        return Categoria::with('sub_categoria')->paginate(10);
    }

    public function create($dados): Categoria
    {
        return Categoria::create($dados);
    }

    public function view($id): Categoria
    {
        return Categoria::find($id);
    }

    public function update(Categoria $categoria, array $dados): Categoria
    {
        $categoria->update($dados);

        return $categoria;
    }

    public function destroy(Categoria $categoria): void
    {
        $categoria->delete();
    }
}
