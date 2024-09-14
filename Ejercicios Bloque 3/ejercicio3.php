<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3 - Calculadora</title>
</head>

<body>

    <h1>Calculadora</h1>
    <form action="" method="POST">
        <label for="valorUno">Ingrese primer valor</label>
        <p><input type="number" name="valorUno" required></p>

        <label for="valorDos">Ingrese segundo valor</label>
        <p><input type="number" name="valorDos" required></p>

        <button type="submit" value="sumar" name="operation">Sumar</button>
        <button type="submit" value="restar" name="operation">Restar</button>
        <button type="submit" value="multiplicar" name="operation">Multiplicar</button>
        <button type="submit" value="dividir" name="operation">Dividir</button>
    </form>

    <?php

    /*
    Ejercicio 3
    Hacer una interfaz de usuario(formulario) con dos inputs y 4 botones:
    uno para sumar, restar, multiplicar y dividir.
    Mostrar resultado
    */

    function mostrarResultado($resultado, $operation){
        echo "<br>";
        echo "<h1>El resultado de la $operation es: $resultado </h1>";
    }

    if(isset($_POST['valorUno']) && isset($_POST['valorDos']) && isset($_POST['operation'])){
        $valorUno = (int) $_POST['valorUno'];
        $valorDos = (int) $_POST['valorDos'];
        $operation = $_POST['operation'];

        switch($operation){
            case 'sumar':
                $resultado = $valorUno + $valorDos;
                mostrarResultado($resultado, $operation);
                break;
            case 'restar':
                $resultado = $valorUno - $valorDos;
                mostrarResultado($resultado, $operation);
                break;
            case 'multiplicar':
                $resultado = $valorUno * $valorDos;
                mostrarResultado($resultado, $operation);
                break;
            case 'dividir':
                if ($valorDos != 0) {
                    $resultado = $valorUno / $valorDos;
                } else {
                    $resultado = "Error: División por cero";
                }
                mostrarResultado($resultado, $operation);
                break;
            default:
                echo "Operación no válida";
                break;
        }

    } else {
        echo "Valores vacíos o error de parámetros";
    }

    ?>

</body>

</html>
