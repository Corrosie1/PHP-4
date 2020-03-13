<?php
namespace models;

class AlpacaModel extends \mvc\Model  {

  private $value;

  public function __construct(){
     $this->value = 5;
  }

  public function getValue(){
    return $this->value;
  }
}

 ?>
