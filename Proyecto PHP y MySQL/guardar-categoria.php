<?php 

if (isset($_POST)) {

    // Conexión a la base de datos
    require_once 'includes/conexion.php';

    $nombre = isset($_POST['nombre']) ? mysqli_real_escape_string($db, $_POST['nombre']) : $_POST['nombre'] = false;

    //Array de errores
    $errores_categoria = [];

    // Validar los datos antes de guardarlos en la base de datos

    // Validar campo nombre
    if (empty($nombre) && is_numeric($nombre) && preg_match("/[0-9]/", $nombre)) {
        $errores_categoria['nombre'] = "El nombre no es valido";
    }
    if(count($errores_categoria) == 0){
        $sql = "INSERT INTO categorias VALUES(NULL, '$nombre');";
        $guardar = mysqli_query($db, $sql);
        header('Location: index.php');
    }else{
        $_SESSION['errores_categoria'] = $errores_categoria;
        header('Location: crear-categoria.php');
    }
}

