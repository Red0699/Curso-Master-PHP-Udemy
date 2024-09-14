<?php 

//Iniciar la sesión y la conexion de la base de datos
require_once 'includes/conexion.php';
if(!isset($_SESSION)){
    session_start();
}

if($_POST){
    
    //Recojer los datos del formulario
    $email = trim($_POST['email']);
    $password = $_POST['password'];

    // Borrar error antiguo en caso de que exista
    if(isset($_SESSION['error_login'])){
        unset($_SESSION['error_login']);
    }

    //Consulta para comprobar las credenciales del usuario
    $sql = "SELECT * FROM usuarios WHERE email = '$email'";
    $login = mysqli_query($db, $sql);

    if($login && mysqli_num_rows($login) == 1){
        $usuario = mysqli_fetch_assoc($login);

        //Comprobar la contraseña
        $verify = password_verify($password, $usuario['password']);

        if($verify){
            // Utilizar una sesion para guardar los datos del usuario logueado
            $_SESSION['usuario'] = $usuario;

        }else{
            //Si algo falla, enviar una sesion con el fallo
            $_SESSION['error_login'] = "Login incorrecto";
        }
    }else{
        // Mensaje de error
        $_SESSION['error_login'] = "Login incorrecto";
    }
}

// Redirigir al index.php
header('Location: index.php');