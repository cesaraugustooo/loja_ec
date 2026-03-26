<?php

namespace App\Interfaces;

use App\Models\Vendedor;
use Ramsey\Collection\Collection;

interface IVendedorInterface
{
    public function create($dados): Vendedor;

    public function view($id): Vendedor;

    public function update(Vendedor $vendedor, array $dados): Vendedor;

    public function destroy(Vendedor $vendedor): void;
}
