<?php
/*
// Abrir archivo
$archivo = fopen("fichero-texto.txt", "a+");

// Leer contenido
while (!feof($archivo)) {
    $contenido = fgets($archivo);
    echo $contenido;
}


//$contenido = fgets($archivo);
//echo $contenido;


// Escribir
fwrite($archivo, "***Soy un texto metido desde php***");

// Cerrar archivo
fclose($archivo);
*/

// Copiar
//copy('fichero-texto.txt', 'fichero-copiado.txt') or die("Error al copiar");

// Renombrar
//rename('fichero-copiado.txt', 'fichero-renombrado.txt');

// Eliminar
//unlink('fichero-renombrado.txt') or die('Error al eliminar');

if(file_exists('fichero-texto.txt')){
    echo "El archivo existe";
}else{
    echo "El archivo no existe";
}
