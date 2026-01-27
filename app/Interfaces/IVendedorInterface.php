<?php

namespace App\Interfaces;

use App\Models\Vendedor;
use Ramsey\Collection\Collection;

interface IVendedorInterface {
    public function create($dados): Vendedor;
    public function view($id): Vendedor;

    public function update(int $id, array $dados): Vendedor;
}