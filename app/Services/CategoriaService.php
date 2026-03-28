<?php

namespace App\Services;

use App\Interfaces\ICategoriaInterface;
use App\Models\Categoria;

class CategoriaService
{
    public function __construct(
        private ICategoriaInterface $categoriaRepository
    ) {}

    public function listar()
    {
        return $this->categoriaRepository->index();
    }

    public function create($dados)
    {
        $categoria = $this->categoriaRepository->create($dados);

        return $categoria;
    }

    public function view($id)
    {
        return $this->categoriaRepository->view($id);
    }

    public function atualizar(Categoria $categoria, array $dados)
    {
        return $this->categoriaRepository->update($categoria, $dados);
    }

    public function deletar(Categoria $categoria)
    {
        return $this->categoriaRepository->destroy($categoria);
    }
}
