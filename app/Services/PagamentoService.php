<?php

use App\Interfaces\IPagamentoInterface;

class PagamentoServive
{
    public function __construct(
        private IPagamentoInterface $pagamentoRepository
    ) {}

    public function sendPayment($data)
    {
        return $this->pagamentoRepository->create($data);
    }
}
