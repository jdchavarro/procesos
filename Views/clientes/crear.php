<link rel="stylesheet" href="<?= URL . VIEWS; ?>css/clientes.css">
<div class="contenedor">

    <?php require VIEWS . 'Cabecera.php'; ?>
    <?php require VIEWS . 'menu.php'; ?>

    <main>

        <div class="formCliente">
            <h2>CREAR CLIENTE</h2>
            <form action="<?= URL; ?>Cliente/almacenar" method="POST">
                <div class="form-group">
                    <label for="cedulaCliente">CEDULA</label>
                    <input type="number" required class="form-control" name="cedulaCliente" id="cedulaCliente">
                </div>
                <div class="form-group">
                    <label for="nombreCliente">NOMBRE COMPLETO</label>
                    <input type="text" required class="form-control" name="nombreCliente" id="nombreCliente">
                </div>
                <div class="form-group">
                    <label for="telefonoCliente">TELEFONO</label>
                    <input type="number" class="form-control" name="telefonoCliente" id="telefonoCliente">
                </div>
                <div class="form-group">
                    <label for="direccionCliente">DIRECCION</label>
                    <input type="text" class="form-control" name="direccionCliente" id="direccionCliente">
                </div>
                <div class="form-group">
                    <label for="emailCliente">CORREO ELECTRONICO</label>
                    <input type="email" class="form-control" name="emailCliente" id="emailCliente">
                </div>
                <button type="submit" class="btn btn-primary">CREAR</button>
            </form>
        </div>

    </main>

    <?php require VIEWS . 'pie.php'; ?>
</div>