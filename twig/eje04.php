<?php

require_once 'vendor/autoload.php';

$loader = new \Twig\Loader\FilesystemLoader('templates');
$twig = new \Twig\Environment($loader);

$opcion = $_GET['opcion'] ?? 0;

echo $twig->render('eje04.html.twig', [
    'opcion' => $opcion
]);