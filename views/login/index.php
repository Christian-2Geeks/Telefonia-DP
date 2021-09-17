<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo constant('url') ?>public/styles/App.css" />
    <title>Proyecto</title>
  </head>
  <body>
    <main class="login">
      <section class="login-container">
        <h2>Inicia Sesión</h2>
        <form action="<?php echo constant('url') ?>Main" method="post">
          <input class="input" type="text" placeholder="Email..." />
          <input class="input" type="password" placeholder="Contraseña" />
          <button class="btn">Iniciar Sesión</button>
          <div></div>
        </form>
      </section>
    </main>
  </body>
</html>
