<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pedido extends Model
{
    use SoftDeletes;

    public $fillable = ['quantidade', 'preco', 'status', 'user_id', 'produtos_id'];

    public function venda(){
        return $this->hasMany(Venda::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function produto(){
        return $this->belongsTo(Produto::class, 'produtos_id'); 
    }

    protected $hidden = [
        'user_id'
    ];
}
