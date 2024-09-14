<?php 

/*

Ejercicio 2:

1. Una función
2. La función debe validar un email con filter_var
3. Recoger una variable por get y validarla
4. Mostrar resultado

*/

// Función para validar un email
function validarEmail($correo){
    if(!empty($correo) || !filter_var($correo, FILTER_VALIDATE_EMAIL)){
        return false;
    }else{
        return true;
    }
}

// Recoger variable GET
if(isset($_GET['correo'])){
    $correo = $_GET['correo'];
    $flag = validarEmail($correo);
    
    // Mostrar resultado
    if($flag){
        echo "<h1>Este correo ($correo) es valido</h1>";
    }else{
        echo "<h1>El correo no es valido</h1>";
    }
}else{
    echo "Parametro no valido";
}