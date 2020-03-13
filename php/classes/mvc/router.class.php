<?php

  namespace mvc;

  Class Router {
    private $route;
    private $view;
    private $controller;
    private $model;

    public function __construct(){
      require_once(LOCAL_ROOT. "php/routes.php");

      if (isset($_GET['route'])){
        $this->route = explode("/", $_GET['route']);
      }
      $route = isset($routes[$this->getRoute()]) ? $this->getRoute() : DEFAULT_ROUTE;
      $controller = $routes[$route]['controller'] ? "\\controllers\\" . $routes[$route]['controller'] : Null;
      $model = $routes[$route]['model'] ? "\\models\\" . $routes[$route]['model'] : Null;
      $view = $routes[$route]['view'] ? "\\views\\". $routes[$route]['view'] : Null;

      $this->model = $model != Null ? new $model() : Null;
      $this->controller = $controller != Null ? new $controller($this->model) : Null;
      $this->view =  $view != Null ? new $view($this->controller, $this->model) : Null;

    }

    private function getRoute(){
      return isset($this->route) ? $this->route[0] : DEFAULT_ROUTE;
    }

    public function getView(){
      return $this->view;
    }
  }


 ?>
