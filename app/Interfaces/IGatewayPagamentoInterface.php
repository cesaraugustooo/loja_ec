<?php

namespace App\Interfaces;

interface IGatewayPagamentoInterface {
    public function setPagamento($pedido, $produto): string;
}