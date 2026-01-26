<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Categoria extends Model
{
    use SoftDeletes;

    public $fillable = ['nome', 'produtos_id'];

    public function sub_categoria(){
        return $this->hasMany(Sub_categoria::class);
    }

    public function produtos(){
        return $this->belongsTo(Produtos::class);
    }
}
