<?php
  namespace controllers;

  class route2 extends \mvc\controller {

    public function __construct($model){
      parent::__construct($model);
      header("location:". WEB_ROOT . "form");
    }
  }
 ?>
