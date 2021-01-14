<?php require_once 'includes/redireccion.php'; ?>
<?php require_once 'includes/cabecera.php'; ?>
<?php require_once 'includes/lateral.php'; ?>


        <!-- CAJA PRINCIPAL -->
        <div id="principal">
            <h1>Crear Categoría</h1>
            <p>
                Añade nuevas categorias para que el usuario pueda usarlas al crear sus entradas.
            </p>
            <hr>
            <br>
            <form action="guardar-categoria.php" method="POST">
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" />
                <input type="submit" value="Guardar" />
            </form>
        </div><!-- Fin principal-->
    
<?php require_once 'includes/pie.php'; ?>