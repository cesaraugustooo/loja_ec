<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Produto extends Model
{
    use SoftDeletes;

    public $fillable = ['nome', 'descricao', 'preco', 'estoque', 'vendedor_id','sub_categorias_id'];

    public function vendedor() {
        return $this->belongsTo(Vendedor::class,'vendedor_id');
    }

    public function sub_categoria() {
        return $this->belongsTo(Sub_categoria::class,'sub_categorias_id');
    }

    public function avaliacoes() {
        return $this->hasMany(Avaliacao::class,'produtos_id');
    }

}