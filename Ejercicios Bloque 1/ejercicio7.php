<?php

/*

Ejercicio 7:

Hacer un programa que muestre todos los numeros IMPARES entre 2 numeros que nos lleguen por la URL usando GET 

*/


if (isset($_GET['numeroUno']) && isset($_GET['numeroDos'])) {
    $numeroUno = $_GET['numeroUno'];
    $numeroDos = $_GET['numeroDos'];

    if ($numeroUno < $numeroDos) {
        for ($i = $numeroUno; $i <= $numeroDos; $i++) {
            if ($i % 2 != 0) {
                echo "$i, ";
            }
        }
    } else {
        for ($i = $numeroDos; $i <= $numeroUno; $i++) {
            if ($i % 2 != 0) {
                echo "$i, ";
            };
        }
    }
} else {
    echo "Introduzca valores";
}
