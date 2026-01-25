<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class vendas extends Model
{
    public $fillable = ['quantidade', 'preco', 'produtos_id', 'vendedores_id', 'user_id', 'pedidos_id'];
}
