<?php 

/*

Sesión:

Almacenar y persistir datos del usuarios mientras navega en un sitio web 
hasta que cierre sesión o cierra el navegador.

*/

// Iniciar la sesión
session_start();

// Variable local
$variable_normal = "Soy una cadena de texto";

// Variable de sesión
$_SESSION['variable_persistente'] = "HOLA SOY UNA SESION ACTIVA";

echo $variable_normal.'<br>';
echo $_SESSION['variable_persistente'].'<br>';
?>