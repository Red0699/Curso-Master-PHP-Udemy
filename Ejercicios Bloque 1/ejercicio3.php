<?php 

/*

Ejercicio 3

Escribir un programa que imprima por pantalla los cuadrados de los 40 primeros numeros naturales

Utilizar bucle while

*/

/*
for($i = 1; $i <= 40; $i++){
    echo "$i: ".$i*$i.', ';
}
*/

$i = 1;
while($i <= 40){
    echo "$i: ".$i*$i.', ';
    $i++;
}