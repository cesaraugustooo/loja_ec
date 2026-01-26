<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    public $fillable = ['nome', 'descricoes', 'preco', 'estoque', 'vendedor_id', 'atividade'];

    public function vendedor() {
        return $this->belongsTo(Vendedor::class,'vendedor_id');
    }
}