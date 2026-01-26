<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class produtos extends Model
{
    use SoftDeletes;

    public $fillable = ['nome', 'descricoes', 'preco', 'estoque', 'vendedor_id', 'atividade'];

    public function vendedor() {
        return $this->belongsTo(Vendedor::class,'vendedor_id');
    }
}