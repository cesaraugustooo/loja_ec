<?php

namespace App\Interfaces;

use App\Models\Sub_categoria;


interface ISubCategoriaInterface {
    public function create($dados): Sub_categoria;

    public function view($id): Sub_categoria;

    public function update(int $id, array $dados): Sub_categoria;
}
