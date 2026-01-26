<?php

namespace App\Services;

use App\Exceptions\InvalidCreateProductsException;
use App\Interfaces\IProdutoInterface;
use Exception;

class ProdutoService {
    public function __construct(
        private IProdutoInterface $produtoRepository
    ) {}


    public function create($dados){
        try{
            $produto = $this->produtoRepository->create($dados);
        }catch(Exception $e){
            throw new InvalidCreateProductsException();
        }
    }
}