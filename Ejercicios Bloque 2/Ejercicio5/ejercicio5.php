<?php

/*

Ejercicio 5:

Crear un array con el contenido de la siguiente tabla:

ACCION          AVENTURA             DEPORTES
GTA            ASSASINS             FIFA 19
Call of Duty   CRASH                PES 19
PUG            Prince of Persia     MOTO GP 19

Cada fila debe ir en un fichero separado(includes)

*/

$juegos = [
    "Accion" => [
        'GTA',
        'Call of Duty',
        'PUG'
    ],
    "Aventura" => [
        'ASSASINS',
        'CRASH',
        'Prince of Persia'
    ],
    "Deporte" => [
        'FIFA 19',
        'PES 19',
        'MOTO GP 19'
    ]
];

$categorias = array_keys($juegos);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <table border="1">
        <thead>
            <?php require_once 'encabezado.php'; ?>
        </thead>

        <tbody>
            <?php require_once 'filaUno.php'; ?>
            <?php require_once 'filaDos.php'; ?>
            <?php require_once 'filaTres.php'; ?>
        </tbody>
    </table>

</body>

</html>