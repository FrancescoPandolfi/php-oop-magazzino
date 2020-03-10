<?php 
require_once 'classes/prodotto.php';
require_once 'classes/computer.php';
require_once 'classes/drone.php';


$macbook = new Prodotto('Macbook', 'computer', 1300);
echo $macbook->getInfo();

$lavatrice = new Prodotto('Samsung', 'Lavatrice', 500);
echo $lavatrice->getInfo();