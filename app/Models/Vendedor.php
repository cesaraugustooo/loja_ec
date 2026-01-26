<?php

namespace App\Models;

use App\Models\produtos;

use Illuminate\Database\Eloquent\Model;

class Vendedor extends Model
{
    public $table = 'vandedores';
    public $fillable = ['user_id', 'loja_nome', 'atividade'];

    public function produtos(){
        return $this->hasMany(Produto::class, 'vendedor_id');  
    }
}
