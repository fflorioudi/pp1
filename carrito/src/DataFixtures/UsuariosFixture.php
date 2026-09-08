<?php

namespace App\DataFixtures;
use App\Entity\Usuario;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class UsuariosFixture extends Fixture
{
    public function load(ObjectManager $manager): void{

    $password = '$2y$13$1xNiuG4c0N3zCNtFVsNpfepdbVDT6UqgJuRwdkdgMWqOn61wKH.he';

        for ($i = 1; $i <= 5; $i++) {
            $usuario = new Usuario();

            $usuario->setNombre('Usuario' . $i);
            $usuario->setEmail('usuario' . $i . '@gmail.com');
            $usuario->setPassword($password);

            $manager->persist($usuario);
        }

        $manager->flush();
    }
}


