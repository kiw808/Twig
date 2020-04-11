<?php

require '../vendor/autoload.php';

$loader = new Twig\Loader\FilesystemLoader('./../src/view');
$twig = new Twig\Environment($loader);

echo $twig->render('hello.html.twig');