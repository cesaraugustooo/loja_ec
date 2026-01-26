<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sub_categoria extends Model
{
    public $fillable = ['nome', 'categorias_id'];
}
