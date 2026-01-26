<?php

namespace App\Repositorys;

use App\Interfaces\IVendaInterface;
use App\Models\Venda;

class VendaRepositoryEloquent implements IVendaInterface {

    public function create($dados): Venda
    {   
        return Venda::create($dados);;
    }

    public function view($id): Venda
    {
        return Venda::find($id);
    }
}