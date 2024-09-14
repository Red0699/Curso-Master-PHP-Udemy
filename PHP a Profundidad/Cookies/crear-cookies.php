<?php 


/*

Cookie:

Es un fichero que se almacena en el navegador del usuario que visita la web,
con el fin de recordar datos o rastrear el comportamiento del mismo en la web.

*/

// Crear cookie
//setcookie("nombre", "valor que solo puede ser texto", caducidad, ruta, dominio);

// Cookie básica
setcookie("miCookie", "Valor de mi cookie");

// Cookie con expiración
setcookie("unyear", "valor de mi cookie de 365 días", time()+(60*60*24*365));

?>

<a href="ver-cookies.php">Ver Cookie</a>
<a href="borrar-cookies.php">Borrar Cookie</a>