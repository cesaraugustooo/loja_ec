<?php

namespace App\Services;

use App\Interfaces\IPagamentoInterface;

class PagamentoService
{
    public function __construct(
        private IPagamentoInterface $pagamentoRepository
    ) {}

    public function sendPayment($data)
    {
        return $this->pagamentoRepository->create($data);
    }

    public function confirmPayment(int $pagamentoId, string $transactionId)
    {
        return $this->pagamentoRepository->update($pagamentoId, [
            'status' => 'pago',
            'transaction_id' => $transactionId
        ]);
    }
}
