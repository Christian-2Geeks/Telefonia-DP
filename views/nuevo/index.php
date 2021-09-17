<?php include "views/header.php"; ?>

<section id="main" class="container">
  <h1>Selección de nuevo</h1>

  <form action="<?php echo constant('url'); ?>nuevo/registrarAlumno" method="POST">
    <p>
      <label for="matricula">Matricula</label>
      <input type="text" name="matricula" required autofocus>
    </p>
    <p>
      <label for="nombre">Nombre</label>
      <input type="text" name="nombre" required>
    </p>
    <p>
      <label for="apellido">Apellido</label>
      <input type="text" name="apellido" required>
    </p>

    <button type="submit">Registrar nuevo alumno</button>
  </form>
</section>

<?php include "views/footer.php"; ?>