<?php

namespace App\Interfaces;

use App\Models\Categoria;


interface ICategoriaInterface {
    public function create($dados): Categoria;

    public function view($id): Categoria;

    public function update(int $id, array $dados): Categoria;
}
