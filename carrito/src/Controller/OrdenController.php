<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class OrdenController extends AbstractController
{
    #[Route('/orden/agregar', name: 'agregar_producto', methods: ['POST'])]
    public function agregarProducto(Request $request): Response
    {
        $idProducto = $request->request->get('idProducto');
        $cantidad = $request->request->get('cantidad');

        $this->addFlash(
            'success',
            "Se ingreso a la orden $cantidad unidades del producto $idProducto"
        );

        return $this->redirectToRoute('listar_productos');
    }
}