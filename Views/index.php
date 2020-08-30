<link rel="stylesheet" href="<?php echo URL . VIEWS; ?>css/index.css">
<div id="formularioIniciarSesion">
  <h1>INICIAR SESION</h1>
  <form action="<?php echo URL; ?>Index/logIn" method="post">
    <div class="form-group">
      <label for="user">Usuario</label>
      <input type="text" required class="form-control" name="user" id="user">
    </div>
    <div class="form-group">
      <label for="password">Contraseña</label>
      <input type="password" required class="form-control" name="password" id="password">
    </div>

    <button type="submit" class="btn btn-primary">Iniciar Sesion</button>
  </form>

  <?php if ($data != "") : ?>
    <div class="alert alert-danger" role="alert">
      <?= $data; ?>
    </div>
  <?php endif; ?>

</div>