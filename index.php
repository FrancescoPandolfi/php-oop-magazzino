<?php 
require_once __DIR__ . '/classes/Prodotto.php';
require_once __DIR__ . '/classes/Computer.php';
require_once __DIR__ . '/classes/Drone.php';


$macbook = new Prodotto('Macbook', 'Computer', 1300);
echo $macbook->getInfo();

echo PHP_EOL;

$lavatrice = new Prodotto('Samsung', 'Elettrodomestici', 500);
echo $lavatrice->getInfo();

echo PHP_EOL;

$drone = new Drone('Mavic mini', 'Tempo libero', 499, 30);
echo $drone->getInfo();

echo PHP_EOL;

$pc = new Computer('HP', 'Computer', 1199);

$pc->setDetails('portatile', '16 GB', 'oled', '1 TB');

echo $pc->getInfo();
echo $pc->getDetail();

