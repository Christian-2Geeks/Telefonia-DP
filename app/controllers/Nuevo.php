<?php
class Nuevo extends BaseController
{
  public function __construct()
  {
    parent::__construct();
    $this->view->render('nuevo/index');
  }

  public function registrarAlumno()
  {
    $matricula = $_POST['matricula'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];

    if ($this->model->insert(['matricula' => $matricula, 'nombre' => $nombre, 'apellido' => $apellido])) {
      echo 'alumno creado';
    }
  }
}
