<?php

if (isset($_POST)) {

    // Conexión a la base de datos
    require_once 'includes/conexion.php';

    $titulo = isset($_POST['titulo']) ? mysqli_real_escape_string($db, $_POST['titulo']) : $_POST['titulo'] = false;
    $descripcion = isset($_POST['descripcion']) ? mysqli_real_escape_string($db, $_POST['descripcion']) : $_POST['descripcion'] = false;
    $categoria = isset($_POST['categoria']) ? (int) $_POST['categoria'] : $_POST['categoria'] = false;
    $usuario_id = $_SESSION['usuario']['id'];

    //Array de errores
    $errores_entrada = [];

    // Validar los datos antes de guardarlos en la base de datos

    // Validar campo titulo
    if (!empty($titulo)) {
        $titulo_validado = true;
    } else {
        $titulo_validado = false;
        $errores_entrada['titulo'] = "El titulo no es valido";
    }

    // Validar campo descripción
    if (empty($descripcion)) {
        $errores_entrada['descripcion'] = "La descripción no es valida";
    }

    // Validar categoría
    if (empty($categoria)) {
        $errores_entrada['categoria'] = "Debe seleccionar una categoría";
    }

    // Validar campo descripción

    if (count($errores_entrada) == 0) {
        if (isset($_GET['editar'])) {
            $sql = "UPDATE entradas SET titulo = '$titulo', descripcion = '$descripcion', categoria_id = $categoria".
            " WHERE id = {$_GET['editar']} AND usuario_id = {$_SESSION['usuario']['id']}";
            
        } else {
            $sql = "INSERT INTO entradas VALUES(NULL, $usuario_id ,$categoria,'$titulo', '$descripcion',CURDATE());";
        }
        
        $guardar = mysqli_query($db, $sql);
        header('Location: index.php');
        
    } else {
        $_SESSION['errores_entrada'] = $errores_entrada;
        if(isset($_GET['id'])){
            header('Location: editar-entrada.php?id='.$_GET['id']);
        }else{
            header('Location: crear-entrada.php');
        }
        
    }
    
}
