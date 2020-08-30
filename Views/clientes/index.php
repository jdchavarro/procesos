<div class="contenedor">

    <?php require VIEWS . 'cabecera.php'; ?>
    <?php require VIEWS . 'menu.php'; ?>
    <main>

        <a class="btn btn-success" href="<?= URL; ?>Cliente/crear">CREAR</a>

        <table class="table table-striped">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">CEDULA</th>
                    <th scope="col">NOMBRE</th>
                    <th scope="col">TELEFONO</th>
                    <th scope="col">DIRECCION</th>
                    <th scope="col">EMAIL</th>
                    <th scope="col">OPCIONES</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data as $cliente) : ?>
                    <tr>
                        <td><?= $cliente['cedula'] ?></td>
                        <td><?= $cliente['nombre'] ?></td>
                        <td><?= $cliente['telefono'] ?></td>
                        <td><?= $cliente['direccion'] ?></td>
                        <td><?= $cliente['email'] ?></td>
                        <td>
                            <a href="<?= URL . "Cliente/actualizar/" . $cliente['id']; ?>">editar</a>
                            <a href="<?= URL . "Cliente/borrar/" . $cliente['id']; ?>">borrar</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </main>

    <?php require VIEWS . 'pie.php'; ?>
</div>