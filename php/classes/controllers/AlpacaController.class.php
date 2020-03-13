<?php
  namespace controllers;

  class AlpacaController extends \mvc\controller {

    public function multiplyRandom($data){
      $random = mt_rand(1,10);
      return $random * $data;
    }
  }
 ?>
