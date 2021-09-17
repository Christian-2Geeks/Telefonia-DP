<?php

class NuevoModel extends Model
{

  public function __construct()
  {
    parent::__construct();
  }

  public function insert($data)
  {
    // Insertar datos en la DB
    try {
      $sql = 'INSERT INTO alumnos(matricula, nombre, apellido) VALUES(:matricula, :nombre, :apellido)';
      $query = $this->db->connect()->prepare($sql);
      $query->execute(['matricula' => $data['matricula'], 'nombre' => $data['nombre'], 'apellido' => $data['apellido']]);
      return true;
    } catch (PDOException $e) {
      echo 'Ya existe esa matricula';
      return false;
    }
  }
}
