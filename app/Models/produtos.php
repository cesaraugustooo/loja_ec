<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class produtos extends Model
{
    public $fillable = ['nome', 'descricoes', 'preco', 'estoque', 'atividade'];
}
