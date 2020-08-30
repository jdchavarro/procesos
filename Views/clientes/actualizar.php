<link rel="stylesheet" href="<?= URL . VIEWS; ?>css/clientes.css">
<div class="contenedor">

    <?php require VIEWS . 'Cabecera.php'; ?>
    <?php require VIEWS . 'menu.php'; ?>

    <main>

        <div class="formCliente">
            <h2>ACTUALIZAR CLIENTE</h2>
            <form action="<?= URL; ?>Cliente/modificar" method="POST">
                <input type="hidden" name="idCliente" value="<?= $data['id'] ?>">
                <div class="form-group">
                    <label for="cedulaCliente">CEDULA</label>
                    <input readonly type="number" class="form-control" name="cedulaCliente" id="cedulaCliente" value="<?= $data['cedula'] ?>">
                </div>
                <div class="form-group">
                    <label for="nombreCliente">NOMBRE COMPLETO</label>
                    <input type="text" required class="form-control" name="nombreCliente" id="nombreCliente" value="<?= $data['nombre'] ?>">
                </div>
                <div class="form-group">
                    <label for="telefonoCliente">TELEFONO</label>
                    <input type="number" class="form-control" name="telefonoCliente" id="telefonoCliente" value="<?= $data['telefono'] ?>">
                </div>
                <div class="form-group">
                    <label for="direccionCliente">DIRECCION</label>
                    <input type="text" class="form-control" name="direccionCliente" id="direccionCliente" value="<?= $data['direccion'] ?>">
                </div>
                <div class="form-group">
                    <label for="emailCliente">CORREO ELECTRONICO</label>
                    <input type="email" class="form-control" name="emailCliente" id="emailCliente" value="<?= $data['email'] ?>">
                </div>
                <button type="submit" class="btn btn-primary">ACTUALIZAR</button>
            </form>
        </div>

    </main>

    <?php require VIEWS . 'pie.php'; ?>
</div>