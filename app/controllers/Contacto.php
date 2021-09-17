<?php

class Contacto extends BaseController {

  public function __construct() {
    parent::__construct();
    $this->view->render('contacto/index');
  }
}