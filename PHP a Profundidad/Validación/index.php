<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validación de formulario PHP</title>
</head>
<body>
    <h1>Validación de formulario PHP</h1>

    <?php 
        if(isset($_GET['error'])){
            $error = $_GET['error'];
            if($error == 'faltan-datos'){
                echo '<strong style="color:red">Introduce todos los datos en los campos del formulario</strong>';
            }

            if($error == 'nombre'){
                echo '<strong style="color:red">El campo nombre esta incorrecto</strong>';
            }

            if($error == 'apellido'){
                echo '<strong style="color:red">El campo apellido esta incorrecto</strong>';
            }

            if($error == 'edad'){
                echo '<strong style="color:red">El campo edad esta incorrecto</strong>';
            }

            if($error == 'correo'){
                echo '<strong style="color:red">El campo correo esta incorrecto</strong>';
            }

            if($error == 'password'){
                echo '<strong style="color:red">Introduce una contraseña mas de 5 caracteres</strong>';
            }
        }

    ?>

    <form action="procesar-formulario.php" method="POST">
        <label for="nombre">Nombre</label><br>
        <input type="text" name="nombre" required pattern="[A-za-z]+"><br>

        <label for="apellido">Apellido</label><br>
        <input type="text" name="apellido" pattern="[A-za-z]+" required><br>

        <label for="edad">Edad</label><br>
        <input type="number" name="edad" pattern="[0-9]" required><br>

        <label for="email">Email</label><br>
        <input type="email" name="email" required><br>

        <label for="password">Contraseña</label><br>
        <input type="password" name="password" required><br>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>