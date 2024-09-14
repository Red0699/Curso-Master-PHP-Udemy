<?php  


/*

Ejercicio 2:

Escribir un programa con php que añada valores a un array mientras que su longitud sea menor a 120 y luego mostrarlo por pantalla

*/

$numeros = [];

for($i = 0; $i < 120; $i++){
    array_push($numeros, rand(1, 120));
}

/*
foreach($numeros as $numero){
    var_dump($numero);
}
*/

var_dump($numeros);

