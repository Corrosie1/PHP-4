<?php
  namespace controllers;

  class route1 extends \mvc\controller {

    public function __construct($model){
      parent::__construct($model);
      header("location:". WEB_ROOT . "index.php");
    }
  }
 ?>
