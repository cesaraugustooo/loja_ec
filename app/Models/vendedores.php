<?php

namespace App\Models;

use App\Models\produtos;

use Illuminate\Database\Eloquent\Model;

class vendedores extends Model
{
    public $table = 'vandedores';
    public $fillable = ['user_id', 'loja_nome', 'atividade'];

    public function produtos(){
        return $this->hasMany(produtos::class, 'vendedor_id');  
    }
}
