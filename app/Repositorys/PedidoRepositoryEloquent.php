<?php

namespace App\Repositorys;

use App\Interfaces\IPedidoInterface;
use App\Models\Pedido;


class PedidoRepositoryEloquent implements IPedidoInterface {
    public function create($dados): Pedido{
        return Pedido::create($dados);
    }

        public function view($id): Pedido
    {
        return Pedido::find($id);
    }
        public function update($id, $dados): Pedido{
        $pedido = Pedido::findOrFail($id);

        $pedido->update($dados);

        return $pedido;
    }
}