<?php

interface IGatewayPagamentoInterface {
    public function setPagamento($pedido): object;
}