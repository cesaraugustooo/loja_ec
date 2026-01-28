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

    public function categoria() {
        return $this->HasMany(Categoria::class);
    }

    public function avaliacao() {
        return $this->hasMany(Avaliacao::class,'produtos_id');
    }

}