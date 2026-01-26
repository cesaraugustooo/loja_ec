<?php

namespace App\Interfaces;

use App\Models\Avaliacao;



interface IAvaliacaoInterface {
    public function create($dados): Avaliacao;

    public function view($id): Avaliacao;
}
