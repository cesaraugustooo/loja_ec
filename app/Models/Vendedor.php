<?php

namespace App\Models;

use App\Models\produtos;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Vendedor extends Model
{
    use SoftDeletes;

    public $table = 'vendedores';
    public $fillable = ['user_id', 'loja_nome', 'atividade'];

    public function produtos(){
        return $this->hasMany(Produto::class, 'vendedor_id');  
    }

        public function vendedor(){
        return $this->belongsTo(Venda::class);
    }
}
