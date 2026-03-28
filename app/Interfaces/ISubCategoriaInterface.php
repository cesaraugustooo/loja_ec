<?php

namespace App\Interfaces;

use App\Models\Sub_categoria;


interface ISubCategoriaInterface
{
    public function index();

    public function create($dados): Sub_categoria;

    public function view($id): Sub_categoria;

    public function update(Sub_categoria $sub_categoria, array $dados): Sub_categoria;

    public function destroy(Sub_categoria $sub_categoria): void;
}
