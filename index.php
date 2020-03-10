<?php 
require_once 'prodotto.php';


$macbook = new Prodotto('Macbook', 'computer', 1300);

echo $macbook->getInfo();