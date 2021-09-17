<?php

class ErrorController extends BaseController {

  public function __construct() {
    parent::__construct();
    $this->view->message = "404 Not Found";
    $this->view->render('error/index');
  }
}