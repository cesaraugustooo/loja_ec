<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class avaliacoes extends Model
{
    public $fillable = ['nota', 'user_id', 'produtos_id'];
}
