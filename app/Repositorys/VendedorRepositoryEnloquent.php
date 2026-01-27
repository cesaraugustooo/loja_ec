<?php

namespace App\Repositorys;

use App\Interfaces\IVendedorInterface;
use App\Models\Vendedor;

class VendedorRepositoryEnloquent implements IVendedorInterface {

    public function create($dados): Vendedor
    {   
        return Vendedor::create($dados);;
    }

    public function view($id): Vendedor
    {
        return $id->load('produtos');
    }

        public function update(int $id, array $dados): Vendedor{
        $vendedor = Vendedor::findOrFail($id);

        $vendedor->update($dados);

        return $vendedor;
    }
}