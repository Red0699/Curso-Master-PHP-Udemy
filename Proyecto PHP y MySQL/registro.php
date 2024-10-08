<?php

if (isset($_POST)) {
    require_once 'includes/conexion.php';
    
    //Recojer los valores del formulario de registro
    $nombre = isset($_POST['nombre']) ? mysqli_real_escape_string($db, $_POST['nombre']) : $_POST['nombre'] = false;
    $apellidos = isset($_POST['apellidos']) ? mysqli_real_escape_string($db, $_POST['apellidos']) : $_POST['apellidos'] = false;
    $email = isset($_POST['email']) ? mysqli_real_escape_string($db, trim($_POST['email'])) : $_POST['email'] = false;
    $password = isset($_POST['password']) ? mysqli_real_escape_string($db, trim($_POST['password'])) : $_POST['password'] = false;

    //Array de errores
    $errores = [];

    // Validar los datos antes de guardarlos en la base de datos

    // Validar campo nombre
    if (!empty($nombre) && !is_numeric($nombre) && !preg_match("/[0-9]/", $nombre)) {
        $nombre_validado = true;
    } else {
        $nombre_validado = false;
        $errores['nombre'] = "El nombre no es valido";
    }

    // Validar campo apellidos
    if (!empty($apellidos) && !is_numeric($apellidos) && !preg_match("/[0-9]/", $apellidos)) {
        $apellidos_validado = true;
    } else {
        $apellidos_validado = false;
        $errores['apellidos'] = "Los apellidos no son validos";
    }

    // Validar campo email
    if (!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $email_validado = true;
    } else {
        $email_validado = false;
        $errores['email'] = "El email no es valido";
    }

    // Validar campo contraseña
    if (!empty($password)) {
        $password_validado = true;
    } else {
        $password_validado = false;
        $errores['password'] = "La contraseña esta vacía";
    }

    $guardar_usuario = false;
    if (count($errores) == 0) {
        $guardar_usuario = true;

        // Cifrar la contraseña
        $password_segura = password_hash($password, PASSWORD_BCRYPT, ['cost' => 4]);
        //var_dump(password_verify($password, $password_segura));

        // Insertar usuario en la tabla usuario de la base de datos
        $sql = "INSERT INTO usuarios VALUES(null, '$nombre', '$apellidos', '$email', '$password_segura', CURDATE());";
        $guardar = mysqli_query($db, $sql);

        if ($guardar) {
            $_SESSION['completado'] = "El registro se ha completado con  exito";
        } else {
            $_SESSION['errores']['general'] = "Fallo al guardar los datos";
        }
    } else {
        $_SESSION['errores'] = $errores;
        //var_dump(mysqli_error($db));
        //die();
    }
    
}

header('Location: index.php');
