<?php

/*

Ejercicio 5:

Hacer un programa que muestre todos los numeros entre 2 numeros que nos lleguen por la URL usando GET 

*/


if (isset($_GET['numeroUno']) && isset($_GET['numeroDos'])) {
    $numeroUno = $_GET['numeroUno'];
    $numeroDos = $_GET['numeroDos'];

    if($numeroUno < $numeroDos){
        for($i = $numeroUno; $i <= $numeroDos; $i++){
            echo "$i, ";
        }
    }else{
        for($i = $numeroDos; $i <= $numeroUno; $i++){
            echo "$i, ";
        }
    }

    

}else{
    echo "Introduzca valores";
}