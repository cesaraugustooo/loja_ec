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
        return Vendedor::with('produtos')->find($id);
    }
}