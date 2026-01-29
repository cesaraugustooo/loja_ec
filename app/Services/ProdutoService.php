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
        try{
            $produto = $this->produtoRepository->create($dados);

            return $produto; 
        }catch(Exception $e){
            throw new InvalidCreateProductsException();
        }
    }

   public function view($id) {
        return $this->produtoRepository->view($id);
    }

    public function update(Produto $produto, $dados){
        return $this->produtoRepository->update($produto, $dados);
    }
}
