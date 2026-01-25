<?php

namespace App\Interfaces;

use App\Models\produtos;
use Ramsey\Collection\Collection;

interface IProdutoInterface {
    public function create($dados): produtos;
}