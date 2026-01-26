<?php

namespace App\Services;

use App\Interfaces\IPedidoInterface;

class PedidoService {
    public function __construct(
        private IPedidoInterface $pedidoRepository
    ) {}

    public function create($dados) {
        $pedido = $this->pedidoRepository->create($dados);

        return $pedido;
    }

    public function view($id) {
        return $this->pedidoRepository->view($id);
    }
}