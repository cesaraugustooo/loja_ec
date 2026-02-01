<?php

namespace App\Policies;

use App\Models\Produto;
use App\Models\User;

class ProdutoPolicy
{
    /**
     * Create a new policy instance.
     */
    public function __construct()
    {
        //
    }

    public function update(User $user, Produto $produto){
       return $user->id === $produto->vendedor->user->id;
    }

    public function destroy(User $user, Produto $produto){
        return $user->id === $produto->vendedor->user->id;
    }
}
