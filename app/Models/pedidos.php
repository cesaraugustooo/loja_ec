<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class pedidos extends Model
{
    public $fillable = ['quantidade', 'preco', 'status', 'atividade', 'user_id', 'produtos_id'];
}
