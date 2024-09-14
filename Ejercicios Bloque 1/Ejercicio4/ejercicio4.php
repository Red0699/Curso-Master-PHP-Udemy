<?php

if (isset($_GET['numeroUno']) && isset($_GET['numeroDos'])) {
    $numeroUno = $_GET['numeroUno'];
    $numeroDos = $_GET['numeroDos'];
    
    $suma = $numeroUno + $numeroDos;
    $resta = $numeroUno - $numeroDos;
    $multiplicacion = $numeroUno * $numeroDos;
    $division = $numeroUno / $numeroDos;

    echo "
    <h1>Suma: $suma</h1>
    <h1>Resta: $resta</h1>
    <h1>Multiplicacion: $multiplicacion</h1>
    <h1>Division: $division</h1>

";
} else {
    echo "Introduzca valores";
}
