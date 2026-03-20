<?php

namespace App\Interfaces;

use App\Models\Pagamento;

interface IPagamentoInterface {
    public function create($data): Pagamento ;
}