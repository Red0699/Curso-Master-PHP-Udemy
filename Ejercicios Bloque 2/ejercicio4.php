<?php 

/*

Ejercicio 4

Crear un script en php que tenga 4 variables, una de tipo array, otra de tipo string, otra int y la ultima booleana, 
y que imprima un mensaje segun el tipo de variable que sea

*/

$array = ['ola', 88];
$int = 5;
$string = 'Prueba';
$bool = false;

if(is_array($array)){
    echo "La variable $array es de tipo array";
}

echo '<br>';

if(is_string($string)){
    echo "La variable $string es de tipo string";
}

echo '<br>';

if(is_int($int)){
    echo "La variable $int es de tipo int";
}

echo '<br>';

if(is_bool($bool)){
    echo "La variable $bool es de tipo bool";
}
