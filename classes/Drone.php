<?php
require_once "Prodotto.php";

class Drone extends Prodotto {
  public $fotocamera;
  public $gps;
  public $controller;
  public $funzioni;
  public $autonomia;

  public function __construct($nome, $categoria, $prezzo, $autonomia)
  {
    parent::__construct($nome, $categoria, $prezzo);
    $this->autonomia = $autonomia;
  }

  public function getInfo()
  {
    return
    $this->nome . PHP_EOL .
    $this->categoria . PHP_EOL . 
    $this->autonomia . ' min' . PHP_EOL . 
    $this->prezzo . ' €'. PHP_EOL;
  }

}