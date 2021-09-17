<?php

class View {

  public function __construct() {
    // echo "<p>Vista base</p>";
  }

  public function render($name) {
    require 'views/' . $name . '.php';
  }
}