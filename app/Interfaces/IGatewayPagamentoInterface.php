<?php

namespace App\Interfaces;

use App\Models\Pagamento;

interface IGatewayPagamentoInterface {
    public function setPagamento($pedido, $produto, Pagamento $pagamento): object;
}