<?php

namespace App\Interfaces;

use App\Models\Pedido;



interface IPedidoInterface {
    public function create($dados): Pedido;

    public function view($id): Pedido;

    public function update($id, $dados): Pedido;

    public function meusPedidos($user_id);
}
