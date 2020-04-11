<?php

require '../vendor/autoload.php';

// Twig
$loader = new Twig\Loader\FilesystemLoader('./../src/view');
$twig = new Twig\Environment($loader);

$products = [
    'product1',
    'product2',
    'product3',
    'product4',
    'product5'
];

echo $twig->render('index.html.twig', ['products' => $products]);