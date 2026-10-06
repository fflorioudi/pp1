<?php

namespace App\Controller;

use App\Manager\ProductoManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ProductoController extends AbstractController
{
    #[Route('/', name: 'listar_productos')]
    public function listarProducto(ProductoManager $productoManager): Response
    {
        // Invocar al método getProductos de ProductoManager
        $productos = $productoManager->getProductos();

        // Pasar todos los productos a la plantilla
        return $this->render('producto/lista.html.twig', [
            'productos' => $productos,
        ]); 
    }
}
