<?php

namespace App\Manager;

use App\Repository\ProductoRepository;

class ProductoManager
{
    private ProductoRepository $productoRepository;

    public function __construct(ProductoRepository $productoRepository)
    {
        $this->productoRepository = $productoRepository;
    }

    public function getProductos(): array
    {
        return $this->productoRepository->findAll();
    }

    public function getProducto($id)
    {
        return $this->productoRepository->find($id);
    }
}
