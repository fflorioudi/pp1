<?php

namespace App\DataFixtures;

use App\Entity\Producto;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class ProductoFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // Bucle para crear 10 productos
        for ($i = 1; $i <= 10; $i++) {
            $producto = new Producto();
            
            $producto->setNombre('Producto' . $i);
            $producto->setDescripcion('Lorem ipsum dolor sit amet, consectetur adipiscing elit.');
            $producto->setPrecio(rand(10, 100));
            $producto->setImagen('images/producto' . $i . '.jpg');

            // ¡Esta línea DEBE estar aquí adentro de la llave!
            $manager->persist($producto);
        }

        // Guarda los 10 productos juntos
        $manager->flush();
    }
}
