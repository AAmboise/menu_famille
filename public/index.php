<?php

require_once '../vendor/autoload.php';

$loader = new \Twig\Loader\FilesystemLoader('../template');

$twig = new \Twig\Environment($loader, [
    'cache' => false,
]);

$texte = 'Coucou';

echo $twig->render('home/index.html.twig', [
    'texte' => $texte,
]);
