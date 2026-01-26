<?php

namespace App\Interfaces;

use App\Models\categorias;


interface ICategoriaInterface {
    public function create($dados): categorias;

    public function view($id): categorias;
}
