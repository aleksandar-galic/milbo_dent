<?php

$router->get('', 'views/index.view.php');

// Opsta Stomatologija
$router->get('opsta-stomatologija', 'views/opsta_stomatologija/opsta_stomatologija.view.php');

$router->get('plombe', 'views/opsta_stomatologija/plombe.view.php');
$router->get('lecenje-zuba', 'views/opsta_stomatologija/lecenje_zuba.view.php');
$router->get('paradontologija', 'views/opsta_stomatologija/paradontologija.view.php');
$router->get('decija-stomatologija', 'views/opsta_stomatologija/decija_stomatologija.view.php');

// Estetska Stomatologija
$router->get('estetska-stomatologija', 'views/estetska_stomatologija/estetska-stomatologija.view.php');

$router->get('ortodoncija', 'views/estetska_stomatologija/ortodoncija.view.php');
$router->get('viniri', 'views/estetska_stomatologija/viniri.view.php');
$router->get('izbeljivanje-zuba', 'views/estetska_stomatologija/izbeljivanje_zuba.view.php');
$router->get('bezmetalna-keramika', 'views/estetska_stomatologija/bezmetalna_keramika.view.php');

// Oralna Hirurgija
$router->get('oralna-hirurgija', 'views/oralna_hirurgija/oralna_hirurgija.view.php');

$router->get('vadjenje-zuba', 'views/oralna_hirurgija/vadjenje_zuba.view.php');
$router->get('vadjenje-umnjaka', 'views/oralna_hirurgija/vadjenje_umnjaka.view.php');
$router->get('hirursko-vadjenje', 'views/oralna_hirurgija/hirursko_vadjenje.view.php');
$router->get('ostali-zahvati', 'views/oralna_hirurgija/ostali_zahvati.view.php');

// Protetika
$router->get('protetika', 'views/protetika/protetika.view.php');
$router->get('krunice', 'views/protetika/krunice.view.php');

// Ostalo
$router->get('pitanja-i-odgovori', 'views/pitanja_i_odgovori.view.php');
