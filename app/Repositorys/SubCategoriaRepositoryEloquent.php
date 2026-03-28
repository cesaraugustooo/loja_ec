<?php

namespace App\Repositorys;

use App\Interfaces\ISubCategoriaInterface;
use App\Models\Sub_categoria;

class SubCategoriaRepositoryEloquent implements ISubCategoriaInterface
{
    public function index()
    {
        return Sub_categoria::with('categoria')->paginate(10);
    }

    public function create($dados): Sub_categoria
    {
        return Sub_categoria::create($dados);
    }

    public function view($id): Sub_categoria
    {
        return Sub_categoria::with('categoria')->find($id);
    }

    public function update(Sub_categoria $sub_categoria, array $dados): Sub_categoria
    {
        $sub_categoria->update($dados);

        return $sub_categoria;
    }

    public function destroy(Sub_categoria $sub_categoria): void
    {
        $sub_categoria->delete();
    }
}
