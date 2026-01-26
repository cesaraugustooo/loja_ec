<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class produtos extends Model
{
    public $fillable = ['nome', 'descricoes', 'preco', 'estoque', 'vendedor_id', 'atividade'];

    public function vendedor() {
        return $this->belongsTo(vendedores::class,'vendedor_id');
    }
}