<?php

namespace App\Interfaces;

use App\Models\vendedores;
use Ramsey\Collection\Collection;

interface IVendedorInterface {
    public function create($dados): vendedores;
    public function view($id): vendedores;
}