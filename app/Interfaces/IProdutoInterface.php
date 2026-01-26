<?php

namespace App\Interfaces;

use App\Models\Produto;
use Ramsey\Collection\Collection;

interface IProdutoInterface {
    public function create($dados): Produto;

    public function view($id): Produto;
}
