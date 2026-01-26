<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pedido extends Model
{
    use SoftDeletes;

    public $fillable = ['quantidade', 'preco', 'status', 'atividade', 'user_id', 'produtos_id'];
}
