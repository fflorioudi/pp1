<?php

namespace App\Controller;

use App\Repository\ProductoRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ProductoController extends AbstractController
{
    #[Route('/', name: 'listar_productos')]
    public function listarProducto(ProductoRepository $productoRepository): Response
    {
        // b. Invocar al método findAll de la clase ProductoRepository
        $productos = $productoRepository->findAll();

        // c. Pasar como parámetro todos los productos a la plantilla
        return $this->render('producto/lista.html.twig', [
            'productos' => $productos,
        ]);
    }
}