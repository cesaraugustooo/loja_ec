<?php

namespace App\Repositorys;

use App\Interfaces\IPagamentoInterface;
use App\Models\Pagamento;

class PagamentoRepositoryEloquent implements IPagamentoInterface {
    public function create($data): Pagamento {
        return Pagamento::create($data);
    }
}