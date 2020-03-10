<?php

trait getDetail
{
  public function getDetail()
  {
     return
   $this->tipologia . PHP_EOL .
   $this->ram . PHP_EOL . 
   $this->memoria . PHP_EOL . 
   $this->monitor . PHP_EOL;
  }
}