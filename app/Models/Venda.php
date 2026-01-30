<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Venda extends Model
{
    use SoftDeletes;

    public $fillable = ['quantidade', 'preco','vendedores_id', 'user_id', 'pedidos_id'];

    public function user(){
        return $this->hasOne(User::class);
    }

     public function vendedor(){
        return $this->hasOne(Vendedor::class);
    }
    public function pedidos(){
        return $this->belongsTo(Pedido::class);
    }
}
