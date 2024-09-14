<?php

if (!is_dir('mi_carpeta')) {
    mkdir('mi_carpeta', 0777) or die('No se puede crear la carpeta');
} else {
    echo "Ya existe la carpeta";
}

//rmdir('mi_carpeta') or die("Error al borrar la carpeta");

if ($gestor = opendir('./mi_carpeta')) {
    while (false !== ($archivo = readdir($gestor))) {
        if ($arhivo != '.' && $archivo != '..') {
            echo $archivo . '<br>';
        }
    }
}
