<?php

namespace App\Manager;

use App\Entity\Orden;
use App\Entity\Usuario;
use App\Repository\OrdenRepository;
use App\Repository\ProductoRepository;
use Doctrine\ORM\EntityManagerInterface;

class OrdenManager
{
    private EntityManagerInterface $entityManager;
    private ProductoRepository $productoRepository;
    private OrdenRepository $ordenRepository;

    public function __construct(
        EntityManagerInterface $entityManager,
        ProductoRepository $productoRepository,
        OrdenRepository $ordenRepository
    ) {
        $this->entityManager = $entityManager;
        $this->productoRepository = $productoRepository;
        $this->ordenRepository = $ordenRepository;
    }

    public function agregarProducto(
        Usuario $usuario,
        int $idProducto,
        int $cantidad
    ): void {
        $producto = $this->productoRepository->find($idProducto);

        $orden = $this->obtenerOrden($usuario);

        $item = $orden->addItem($producto, $cantidad);

        $this->entityManager->persist($orden);
        $this->entityManager->persist($item);

        $this->entityManager->flush();
    }

    private function obtenerOrden(Usuario $usuario): Orden
    {
        $orden = $this->ordenRepository->findOneBy([
            'usuario' => $usuario,
            'estado' => 'Iniciada'
        ]);

        if ($orden === null) {
            $orden = new Orden();

            $orden->setUsuario($usuario);
            $orden->setEstado('Iniciada');
            $orden->setIniciada(new \DateTime());
        }

        return $orden;
    }
    public function verOrden(Usuario $usuario): ?Orden
    {
        return $this->ordenRepository->findOneBy([
         'usuario' => $usuario,
         'estado' => 'Iniciada'
     ]);
    }
}