<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class vendedores extends Model
{
    public $table = 'vandedores';
    public $fillable = ['user_id', 'loja_nome', 'atividade'];
}
