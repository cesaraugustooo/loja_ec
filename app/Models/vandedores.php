<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class vendedores extends Model
{
    public $fillable = ['user_id', 'loja_nome', 'atividade'];
}
