<?php 

require_once __DIR__ . '/../vendor/autoload.php';

$loader = new Twig\Loader\FilesystemLoader(__DIR__.'/../src/View');
$twig = new Twig\Environment($loader);

$products = ['Suzuki', 'Vespa', 'Yamaha', 'Piagio', 'Honda'];

echo $twig->render('index.html.twig', [
    'products' => $products
]);

