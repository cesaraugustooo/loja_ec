<?php

namespace App\Interfaces;

use App\Models\Venda;



interface IVendaInterface {
    public function create($dados): Venda;

    public function view($id): Venda;

    public function update(int $id, array $dados): Venda;
}
