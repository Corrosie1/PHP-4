<?php

  define("DEFAULT_ROUTE", "home");

  $routes = array(
    "home" => array(
      "view" => "HomeView",
      "controller" => "HomeController",
      "model" => "HomeModel",
    ),
    "form" => array(
      "view" => "FormView",
      "controller" => "FormController",
      "model" => "FormModel"
    ),
    "test" => array(
      "view" => "TestView",
      "controller" => "TestController",
      "model" => "TestModel"
    ),
    "alpaca" => array(
      "view" => "AlpacaView",
      "controller" => "AlpacaController",
      "model" => "AlpacaModel",
    ),
    "route1" => array(
      "controller" => "route1",
    ),
    "route2" => array (
      "controller" => "route2",
    )
  )

  // het is mogelijk om van de route
  // - form het onderdeel model weg te halen.
  // - test het onderdeel model weg te halen
  // - alpaca heeft alle 3 de onderdelen nodig om te functioneren.
  //
  // - route 1 en route 2 zullen een foutmelding geven omdat er geen view aanwezig is.
  //
  //
 ?>
