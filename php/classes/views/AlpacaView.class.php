<?php
  namespace views;

  class AlpacaView extends \mvc\View {
    public function getHTML(){
      $randomGetal = $this->controller->multiplyRandom($this->model->getValue());
      $alpacaPath = "./assests/images/Alpaca.jpg";
      //
      $output = "<div class=\"alpaca\">";
      $output .= "<h3> tip : refresh </h3>";
      $output .= "<p> Het volgende getal is een getal tussen de 5 en 50 <strong> : " .$randomGetal. "</strong></p>";
      $output .= "<img class=\"alpacaImage\" src='$alpacaPath'>";
      $output .= "</div>";
      return $output;
    }
  }

 ?>
