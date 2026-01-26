<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Sub_categoria extends Model
{
    use SoftDeletes;

    public $fillable = ['nome', 'categorias_id'];
}
