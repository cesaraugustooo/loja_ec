<?php

namespace App\Jobs;

use IGatewayPagamentoInterface;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;

class PaymentJob implements ShouldQueue
{
    use Queueable;
    private $produto;
    private $pedido;
    /**
     * Create a new job instance.
     */
    public function __construct(
        private IGatewayPagamentoInterface $pagamentoGateway,
        $produto,
        $pedido
    )
    {
        $this->produto = $produto;
        $this->pedido = $pedido;
    }

    /**
     * Execute the job.
     */
    public function handle($pedido, $produto): void
    {
        
    }
}
