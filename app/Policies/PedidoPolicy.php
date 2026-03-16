<?php

namespace App\Policies;

use App\Models\Pedido;
use App\Models\User;

class PedidoPolicy
{
    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Pedido $pedido): bool
    {
        // Owner do pedido OU Owner do vendedor que criou o produto do pedido
        return $user->id === $pedido->user_id || 
               $user->id === $pedido->produto->vendedor->user_id;
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return true; // Autenticados podem criar pedido
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Pedido $pedido, $vendedor_id): bool
    {
        return $user->id === $pedido->user_id;
    }
}
