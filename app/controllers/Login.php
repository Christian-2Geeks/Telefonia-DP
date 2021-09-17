<?php

class Login extends BaseController {

  public function __construct() {
    parent::__construct();
    $this->view->render('login/index');
  }
}