<?php
  namespace controllers;

  class FormController extends \mvc\controller {
    
    public function filterVar($var1, $var2){
      $newstr = filter_var($var1, FILTER_SANITIZE_STRING);
      $newstr .= " ";
      $newstr .= filter_var($var2, FILTER_SANITIZE_STRING);
      return $newstr;
    }

    public function addAfterSubmit($name, $addValue, $postData1, $postData2, $method = "POST"){
      $dataSource = ($method == "POST"? $_POST : $_GET);
      if (isset($dataSource[$name])) {
        if (!empty($dataSource[$postData1]) && !empty($dataSource[$postData2])){
          return $addValue;
        }
      }
    }
  }
 ?>
