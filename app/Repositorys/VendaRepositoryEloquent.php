<?php

namespace App\Repositorys;

use App\Interfaces\IVendaInterface;
use App\Models\Venda;

class VendaRepositoryEloquent implements IVendaInterface
{

    public function create($dados): Venda
    {
        return Venda::create($dados);;
    }

    public function view($id): Venda
    {
        return Venda::find($id);
    }

    public function update(Venda $venda, array $dados): Venda
    {
        $venda->update($dados);

        return $venda;
    }

    public function destroy(Venda $venda): void
    {
        $venda->delete();
    }
}
