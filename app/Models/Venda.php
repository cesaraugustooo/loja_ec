<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Venda extends Model
{
    use SoftDeletes;

    public $fillable = ['quantidade', 'preco', 'produtos_id', 'vendedores_id', 'user_id', 'pedidos_id'];
}
