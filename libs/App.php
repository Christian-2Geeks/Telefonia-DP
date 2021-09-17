<?php
require_once 'app/controllers/ErrorController.php';

class App
{

  public function __construct()
  {

    $url = $_GET['url'];
    $url = rtrim($url, '/');
    $url = explode('/', $url);

    if (!empty($url[0])) {
      $fileController = 'app/controllers/' . ucfirst(strtolower($url[0])) . '.php';
      if (file_exists($fileController)) {
        require_once $fileController;
        $nameController = ucfirst(strtolower($url[0]));
        $controller = new $nameController();
        $controller->loadModel($url[0]);

        if (isset($url[1])) {
          $controller->{$url[1]}();
        }
      } else {
        $controller = new ErrorController();
      }
    } else {
      require_once "app/controllers/Main.php";
      $controller = new Main();
      $controller->loadModel('main');
      return false;
    }
  }
}
