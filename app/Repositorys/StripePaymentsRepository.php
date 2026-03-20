<?php

namespace App\Repositorys;

use App\Interfaces\IGatewayPagamentoInterface;
use Stripe\Checkout\Session;
use Stripe\Stripe;

class StripePaymentsRepository implements IGatewayPagamentoInterface
{
    private $api_key;

    public function __construct() {}

    public function setPagamento($pedido, $produto): string
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
                    'produto_id' => $produto->id,
                    'pedido_id' => $pedido->id
                ],
            ],
            'success_url' => route('success'),
            'cancel_url' => route('cancel')
        ]);

        return $session->url;
    }
}
