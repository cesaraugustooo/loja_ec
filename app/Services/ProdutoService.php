<?php

namespace App\Services;

use App\Exceptions\InvalidCreateProductsException;
use App\Interfaces\IProdutoInterface;
use App\Models\Produto;
use Exception;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class ProdutoService {
    use AuthorizesRequests;
    public function __construct(
        private IProdutoInterface $produtoRepository
    ) {}


    public function create($dados){
        $produto = $this->produtoRepository->create($dados);

        return $produto; 
        
    }

   public function view($id) {
        return $this->produtoRepository->view($id);
    }

    public function update(Produto $produto, $dados){
        return $this->produtoRepository->update($produto, $dados);
    }

    public function destroy(Produto $produto) {
        $this->produtoRepository->destroy($produto);
    }
}
