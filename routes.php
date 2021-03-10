<?php

$router->get('', 'views/index.view.php');

// Opsta Stomatologija
$router->get('opsta-stomatologija', 'views/opsta_stomatologija.view.php');

$router->get('plombe', 'views/plombe.view.php');
$router->get('lecenje-zuba', 'views/lecenje_zuba.view.php');
$router->get('paradontologija', 'views/paradontologija.view.php');
$router->get('decija-stomatologija', 'views/decija_stomatologija.view.php');

// Estetska Stomatologija
$router->get('estetska-stomatologija', 'views/estetska-stomatologija.view.php');

// Ostalo
$router->get('pitanja-i-odgovori', 'views/pitanja_i_odgovori.view.php');