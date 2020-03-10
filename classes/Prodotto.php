<?php

// Categoria tecnologia

class Prodotto {
  protected $nome;
  protected $categoria;
  public $marca;
  public $colore;
  protected $prezzo;

  public function __construct($nome, $categoria, $prezzo)
  {
    $this->nome = $nome;
    $this->categoria = $categoria;
    $this->prezzo = $prezzo;
  }

  public function getInfo()
  {
    return
    "$this->nome PHP_EOL
    $this->categoria PHP_EOL
    $this->prezzo PHP_EOL";
  }

}