<?php

namespace App\Repositorys;

use App\Interfaces\IGatewayPagamentoInterface;
use App\Models\Pagamento;
use Stripe\Checkout\Session;
use Stripe\Stripe;

class StripePaymentsRepository implements IGatewayPagamentoInterface
{
    public function __construct() {}

    public function setPagamento($pedido, $produto, Pagamento $pagamento): object
    {
        Stripe::setApiKey(config("services.stripe.secret"));
        
        $session = Session::create([
            'line_items' => [
                [
                    'price_data' => [
                        'currency' => 'brl',
                        'unit_amount' => (int) round($produto->preco * 100),
                        'product_data' => [
                            'name' => $produto->nome
                        ],
                    ],
                    'quantity' => $pedido->quantidade,
                ]
            ],
            'mode' => 'payment',
            'payment_intent_data' => [
                'metadata' => [
                    'pagamento_id' => $pagamento->id,
                    'pedido_id' => $pedido->id,
                    'produto_id' => $produto->id,
                ],
            ],
            'metadata' => [
                'pagamento_id' => $pagamento->id,
            ],
            'success_url' => route('success'),
            'cancel_url' => route('cancel')
        ]);

        return (object) [
            'url' => $session->url,
            'id' => $session->id
        ];
    }
}
