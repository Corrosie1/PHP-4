<?php
  namespace views;

  class FormView extends \mvc\View {
    public function getHTML(){
      $voornaam = $this->controller->getPostData("Voornaam");
      $achternaam = $this->controller->getPostData("Achternaam");
      $filtered = $this->controller->filterVar($voornaam, $achternaam);
      $verhaaltje = "<p class=\"verhaaltje\"> Even een verhaaltje over mezelf, ik ben <strong> $filtered </strong> en ik heb een Alcohol probleem. <br> Einde </p>";
      //
      $output = "<div class=\"form\">";
      $output .= "<h1> form view </h1>";
      $output .= "<form method=\"POST\">";
      $output .= "<label for\"FormView\"> Voornaam </label>";
      $output .= "<br>";
      $output .= "<input type=\"text\" name=\"Voornaam\"/>";
      $output .= "<br>";
      $output .= "<label for\"FormView\"> Achternaam </label>";
      $output .= "<br>";
      $output .= "<input type=\"text\" name=\"Achternaam\"/>";
      $output .= "<br>";
      $output .= "<br>";
      $output .= "<input type=\"submit\" value=\"submit\" name=\"submit\" />";
      $output .= "</form>";
      $output .= "<br>";
      $output .= "</div>";
      $output .= $this->controller->addAfterSubmit("submit", $verhaaltje, "Voornaam", "Achternaam");
      return $output;
    }
  }

 ?>
