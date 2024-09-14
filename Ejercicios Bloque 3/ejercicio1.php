<?php

/*
Ejercicio 1

Crear una sesión que aumente su valor en uno o disminuya en uno en funcion de si el parametro get counter esta a uno o a cero
*/

session_start();

$_SESSION['valor'];

if (isset($_GET['counter'])) {
    $get_counter = $_GET['counter'];

    if($get_counter == 1){
        $_SESSION['valor'] += 1;
    }else if($get_counter == 0){
        $_SESSION['valor'] -= 1;
    }else{
        echo "Ingrese un valor correcto";
    }

    echo $_SESSION['valor'];
}else{
    echo "Parametro no valido";
}

?>

<a href="ejercicio1.php?counter=1">Aumentar valor</a>
<a href="ejercicio1.php?counter=0">Disminuir valor</a>
