<?php
require_once "Prodotto.php";
require_once __DIR__ . "/../traits/getDetail.php";

class Computer extends Prodotto {

  use getDetail;
  public $tipologia;
  public $ram;
  public $monitor;
  public $memoria;

  public function setDetails($tipologia, $ram, $monitor, $memoria)
  {
    $this->tipologia = $tipologia;
    $this->ram = $ram;
    $this->monitor = $monitor;
    $this->memoria = $memoria;
  }
  
  


}