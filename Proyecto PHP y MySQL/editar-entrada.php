<?php require_once 'includes/cabecera.php'; ?>
<?php require_once 'includes/redireccion.php' ?>
<?php
$entrada_actual = conseguirEntrada($db, $_GET['id']);
if (!isset($entrada_actual['id'])) {
    header('Location: index.php');
}
?>

<div id="contenedor">
    <?php require_once 'includes/lateral.php'; ?>
    <div id="principal">
        <h1>Editar entrada</h1>

        <p>
            Edita tu entrada <?=$entrada_actual['titulo'] ?>
        </p>
        <br>
        <form action="guardar-entrada.php?editar=<?=$entrada_actual['id']?>" method="POST">
            <label for="titulo">Título</label>
            <input type="text" name="titulo" value="<?=$entrada_actual['titulo'] ?>">
            <?php echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'], 'titulo') : ''; ?>

            <label for="descripcion">Descripción</label>
            <textarea type="text" name="descripcion"><?=$entrada_actual['descripcion'] ?></textarea>
            <?php echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'], 'descripcion') : ''; ?>

            <label for="categoria">Categoría</label>
            <select name="categoria" id="">
                <option value="" >Seleccione una opción</option>
                <?php $categorias = conseguirCategorias($db);
                if (!empty($categorias)):
                    while ($categoria = mysqli_fetch_assoc($categorias)):
                ?>

                    <option value="<?= $categoria['id'] ?>" <?=($categoria['id'] == $entrada_actual['categoria_id']) ? 'selected' : '' ?>>
                        <?= $categoria['nombre'] ?>
                    </option>
                    
                <?php
                    endwhile;
                endif;
                ?>
            </select>
            <?php echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'], 'categoria') : ''; ?>

            <input type="submit" value="Actualizar">
            <?php borrarErrores(); ?>
        </form>
    </div>
</div>

<?php require_once 'includes/pie.php'; ?>