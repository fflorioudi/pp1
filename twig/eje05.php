<?php

require_once 'vendor/autoload.php';

$loader = new \Twig\Loader\FilesystemLoader('templates');
$twig = new \Twig\Environment($loader);

$nombre = $_GET['name'] ?? 'Invitado';
$opcion = $_GET['opcion'] ?? 0;

echo $twig->render('eje05.html.twig', [
    'nombre' => $nombre,
    'opcion' => $opcion
]);