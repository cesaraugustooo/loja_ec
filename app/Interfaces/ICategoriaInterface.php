<?php

namespace App\Interfaces;

use App\Models\Categoria;


interface ICategoriaInterface
{
    public function index();

    public function create($dados): Categoria;

    public function view($id): Categoria;

    public function update(Categoria $categoria, array $dados): Categoria;

    public function destroy(Categoria $categoria): void;
}
