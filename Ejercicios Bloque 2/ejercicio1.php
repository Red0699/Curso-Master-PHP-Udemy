<?php 

/*

Ejercicio 1

Hacer un programa en php que tenga un array con 8 numeros enteros y que haga lo siguiente:

* Recorrerlo y mostrarlo
* Ordenarlo y mostrarlo
* Mostrar su longitud
* Buscar algun elemento dentro del array

*/

$numeros = [2, 3, 5, 1, 8, 7, 4, 6];

function mostrarArray($numeros){
    foreach($numeros as $numero){
        echo "$numero, ";
    }
}

// Recorrer y mostrarlo

/*
for($i = 0; $i < count($numeros); $i++){
    echo $numeros[$i];
}
    */

echo "Recorrer y mostrarlo: ";
mostrarArray($numeros);

echo "<br>";

// Ordenarlo y mostrarlo
sort($numeros);

echo "Ordenarlo y mostrarlo: ";
mostrarArray($numeros);

echo "<br>";

// Mostrar su longitud
echo 'Longitud: '.count($numeros);

echo "<br>";

// Buscar algun elemento dentro del array
echo 'Buscar algun elemento dentro del array: '. array_search(2, $numeros);







