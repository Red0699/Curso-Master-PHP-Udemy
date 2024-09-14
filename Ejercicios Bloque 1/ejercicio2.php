<?php 

/*

Ejercicio 2

- Escribir un script que muestre en pantalla todos los numeros pares que hay del 1 al 100

*/

for($i = 1; $i <= 100; $i++){
    if($i % 2 == 0){
        if($i != 100){
            echo "$i, ";
        }else{
            echo $i;
        }
    }
}