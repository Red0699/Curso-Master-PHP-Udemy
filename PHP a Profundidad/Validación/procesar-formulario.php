<?php 

function redireccionError($error){
    header("Location:index-php?error=$error");
}

$error = 'Faltan datos';
if(!empty($_POST['nombre']) && !empty($_POST['apellido']) && !empty($_POST['edad']) && !empty($_POST['email']) && !empty($_POST['password'])){
    $error = 'OK';

    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $edad = (int) $_POST['edad'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    //Validar campos
    if(!is_string($nombre) || preg_match("/[0-9]+/", $nombre)){
        redireccionError('nombre');
    }

    if(!is_string($apellido) || preg_match("/[0-9]+/", $nombre)){
        redireccionError('apellido');
    }

    if(!is_int($edad) || !filter_var($edad, FILTER_VALIDATE_INT)){
        redireccionError('edad');
    }

    if(!is_string($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)){
        redireccionError('email');
    }
    
    if(!is_string($password) || !strlen($password) < 5){
        redireccionError('password');
    }

}else{
    redireccionError('faltan-datos');
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validación de formulario PHP</title>
</head>
<body>
    <?php if($error == 'OK'): ?>
        <h1>Datos ingresados correctamente</h1>
        <p><?=$nombre ?></p>
        <p><?=$apellido ?></p>
        <p><?=$edad ?></p>
        <p><?=$email ?></p>
    <?php endif; ?>
</body>
</html>