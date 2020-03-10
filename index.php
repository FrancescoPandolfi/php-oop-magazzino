<?php 
require_once 'classes/prodotto.php';


$macbook = new Prodotto('Macbook', 'computer', 1300);

echo $macbook->getInfo();