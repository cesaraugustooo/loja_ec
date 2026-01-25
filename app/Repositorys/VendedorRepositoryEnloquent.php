<?php

namespace App\Repositorys;

use App\Interfaces\IVendedorInterface;
use App\Models\vendedores;

class VendedorRepositoryEnloquent implements IVendedorInterface {

    public function create($dados): vendedores
    {   
        return vendedores::create($dados);;
    }

    public function view($id): vendedores
    {
        return vendedores::find($id);
    }
}