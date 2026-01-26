<?php

namespace App\Repositorys;

use App\Interfaces\IAvaliacaoInterface;
use App\Models\Avaliacao;
use App\Models\Categoria;

class AvaliacaoRepositoryEloquent implements IAvaliacaoInterface {
    public function create($dados): Avaliacao{
        return Avaliacao::create($dados);
    }

        public function view($id): Avaliacao
    {
        return Avaliacao::find($id);
    }
}