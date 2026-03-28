<?php

namespace App\Services;

use App\Interfaces\ISubCategoriaInterface;
use App\Models\Sub_categoria;

class SubCategoriaService
{
    public function __construct(
        private ISubCategoriaInterface $sub_categoriaRepository
    ) {}

    public function index()
    {
        return $this->sub_categoriaRepository->index();
    }

    public function create($dados)
    {
        $sub_categoria = $this->sub_categoriaRepository->create($dados);

        return $sub_categoria;
    }

    public function view($id)
    {
        return $this->sub_categoriaRepository->view($id);
    }

    public function atualizar(Sub_categoria $sub_categoria, array $dados)
    {
        return $this->sub_categoriaRepository->update($sub_categoria, $dados);
    }

    public function deletar(Sub_categoria $sub_categoria)
    {
        $this->sub_categoriaRepository->destroy($sub_categoria);;
    }
}
