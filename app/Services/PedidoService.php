<?php

namespace App\Services;

use App\Interfaces\IGatewayPagamentoInterface as InterfacesIGatewayPagamentoInterface;
use App\Interfaces\IPedidoInterface;
use App\Interfaces\IProdutoInterface;
use IGatewayPagamentoInterface;

class PedidoService {
    public function __construct(
        private IPedidoInterface $pedidoRepository,
        private IProdutoInterface $produtoRepository,
        private InterfacesIGatewayPagamentoInterface $gatewayPagamento
    ) {}

    public function create($dados) {
        $produto = $this->produtoRepository->view($dados['produtos_id']);
        $dados['preco'] = $produto->preco * $dados['quantidade'];

        $pedido = $this->pedidoRepository->create($dados);

        $url = $this->gatewayPagamento->setPagamento($pedido,$produto);

        return $url;
    }

    public function view($id) {
        return $this->pedidoRepository->view($id);
    }

    public function atualizar(int $id, array $dados)
    {
        return $this->pedidoRepository->update($id, $dados);
    }

    
}