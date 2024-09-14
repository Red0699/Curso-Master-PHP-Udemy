<?php require_once 'includes/cabecera.php'; ?>
<?php require_once 'includes/redireccion.php' ?>


<div id="contenedor">
    <?php require_once 'includes/lateral.php'; ?>
    <div id="principal">
        <h1>Crear categoría</h1>

        <p>
            Añade nuevas categorías al blog para que los usuarios puedan usarlas para crear sus entradas
        </p>
        <br>
        <form action="guardar-categoria.php" method="POST">
            <label for="nombre">Nombre de la categoria</label>
            <input type="text" name="nombre">
            <?php isset($_SESSION['errores_categoria']) ? mostrarError($_SESSION['errores_categoria'], 'categoria') : ''; ?>

            <input type="submit" value="Guardar">
            <?php borrarErrores(); ?>
        </form>
    </div>
</div>

<?php require_once 'includes/pie.php'; ?>