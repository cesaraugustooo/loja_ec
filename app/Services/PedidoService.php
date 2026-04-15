<?php

namespace App\Services;

use App\Interfaces\IGatewayPagamentoInterface;
use App\Interfaces\IPagamentoInterface;
use App\Interfaces\IPedidoInterface;
use App\Interfaces\IProdutoInterface;

class PedidoService
{
    public function __construct(
        private readonly IPedidoInterface $pedidoRepository,
        private readonly IProdutoInterface $produtoRepository,
        private readonly IGatewayPagamentoInterface $gatewayPagamento,
        private readonly IPagamentoInterface $pagamentoRepository
    ) {}

    public function create($dados)
    {
        $produto = $this->produtoRepository->view($dados['produtos_id']);
        $dados['preco'] = $produto->preco * $dados['quantidade'];

        $pedido = $this->pedidoRepository->create($dados);

        $pagamento = $this->pagamentoRepository->create([
            'valor' => $dados['preco'],
            'status' => 'pendente',
            'transaction_id' => 'aguardando', // Será atualizado pelo Webhook
            'pedidos_id' => $pedido->id
        ]);

        $stripeSession = $this->gatewayPagamento->setPagamento($pedido, $produto, $pagamento);

        $this->pagamentoRepository->update($pagamento->id, [
            'checkout_id' => $stripeSession->id
        ]);

        return $stripeSession->url;
    }

    public function view($id)
    {
        return $this->pedidoRepository->view($id);
    }

    public function atualizar(int $id, array $dados)
    {
        return $this->pedidoRepository->update($id, $dados);
    }

    public function meusPedidos($user_id)
    {
        return $this->pedidoRepository->meusPedidos($user_id);
    }
}
