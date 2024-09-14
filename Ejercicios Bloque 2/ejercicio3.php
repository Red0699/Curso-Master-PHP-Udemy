<?php 

/*  

Ejercicio 3:

Programa que compruebe si una variable esta vacia y si esta vacia, rellenarla con texto en minuscula y mostrarlo en mayusculas y negrita


*/

$texto = "";

if(empty($texto)){
    $texto = 'esto es un texto';
    echo $texto;
    echo '<h1 style="font-weight:bold">'.strtoupper($texto).' convertido en mayusculas y en negrita'.'</h1>';
}else{
    echo "La variable no esta vacia";
}


