    <?php

require_once 'vendor/autoload.php';

$loader = new \Twig\Loader\FilesystemLoader('templates');
$twig = new \Twig\Environment($loader);

$paises = [
    "España",
    "Argentina",
    "Brasil",
    "Chile",
    "Uruguay"
];

echo $twig->render('eje03.html.twig', [
    'paises' => $paises
]);