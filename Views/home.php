<div class="contenedor">

    <?php require VIEWS . 'cabecera.php'; ?>
    <?php require VIEWS . 'menu.php'; ?>
    <main>
        <section>
            <h2>BUSCAR POR DEMANDADO</h2>
            <form class="form-inline">
                <div class="form-group mx-sm-3 mb-2">
                    <label for="buscarDemandado" class="sr-only">Nombre Demandado</label>
                    <input type="text" class="form-control" id="buscarDemandado" placeholder="Nombre del Demandado">
                </div>
                <button type="submit" class="btn btn-primary mb-2">BUSCAR</button>
            </form>
            <div id="resultado">
                RESULTADO DE LA BUSQUEDA
            </div>
        </section>
    </main>

    <?php require VIEWS . 'pie.php'; ?>
</div>