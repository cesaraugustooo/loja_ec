<?php

namespace App\Repositorys;

use App\Interfaces\IProdutoInterface;
use App\Models\Produto;
use App\Models\Vendedor;

class ProdutoRepositoryEloquent implements IProdutoInterface {
    public function create($dados): Produto{
        $vendedor_id = Vendedor::where('user_id',$dados['user_id'])->first()->id;
        $dados['vendedor_id'] = $vendedor_id;

        return Produto::create($dados);
    }

        public function view($id): Produto
    {
        return Produto::find($id);
    }

    public function update(Produto $produto, $dados): Produto{
        $produto->update($dados);

        return $produto;
    }
    
}