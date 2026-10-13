<?php

namespace App\Controller;

use App\Manager\OrdenManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class OrdenController extends AbstractController
{
    #[Route('/orden/agregar', name: 'agregar_producto', methods: ['POST'])]
    public function agregarProducto(
        Request $request,
        OrdenManager $ordenManager
    ): Response {
        $idProducto = (int) $request->request->get('idProducto');
        $cantidad = (int) $request->request->get('cantidad');

        $ordenManager->agregarProducto(
            $this->getUser(),
            $idProducto,
            $cantidad
        );

        $this->addFlash(
            'success',
            "Se ingreso a la orden $cantidad unidades del producto $idProducto"
        );

        return $this->redirectToRoute('listar_productos');
    }
    #[Route('/orden/ver', name: 'ver_orden')]
    public function verOrden(OrdenManager $ordenManager): Response
    {
     $orden = $ordenManager->verOrden($this->getUser());

        return $this->render('orden/resumen.html.twig', [
            'orden' => $orden,
        ]);
    }
}