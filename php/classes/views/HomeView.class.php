<?php
  namespace views;

  class HomeView extends \mvc\View {
    public function getHTML(){
      $alfabet = array("A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z");
      $klik = $this->controller->getGetData("klik");
      //
      $output = "";
      $output .= (empty($klik) || $klik > 26  ? "<p class=\"alfabet\"> getal ". $klik++ . " staat niet gelijk aan een waarde in het alfabet </p>" : "<p class=\"alfabet\"><strong>".$klik++."</strong> staat gelijk aan <strong>".$alfabet[$klik-2]."</strong></p>");
      $output .= "<a href=\"home?klik=$klik\">klik</a>";
      $output .= "<br>";
      return $output;
    }
  }

 ?>
