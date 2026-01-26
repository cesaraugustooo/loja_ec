<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Avaliacao extends Model
{
    use SoftDeletes;
    
    public $fillable = ['nota', 'user_id', 'produtos_id'];

    public function user(){
        return $this->HasOne(User::class);
    }
    public function produto(){
        return $this->belongsTo(Produto::class);
    }
}
