<?php

class Main extends BaseController {

  public function __construct() {
    parent::__construct();
    $this->view->render('main/index');
  }

  public function saludar() {
    echo "<p>Hola funcion</p>";
  }
}