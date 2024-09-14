<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario PHP y HTML</title>
</head>
<body>

    <h1>Formulario PHP y HTML</h1>
    <form action="" method="POST" enctype="multipart/form-data">
        <label for="">Nombre</label>
        <p><input type="text" name="nombre" placeholder="Ingrese nombre" value="Nicolas" required></p>

        <label for="">Apellido</label>
        <p><input type="text" name="apellido" placeholder="Ingrese apellido" maxlength="10" minlength="4" pattern="[A-Z ]+"></p>

        <label for="">Botón</label>
        <p><input type="button" name="boton" value="Clic me"></p>

        <label for="">Sexo</label>
        <p>
            Hombre: <input type="checkbox" name="sexo" value="Hombre" checked>
            Mujer: <input type="checkbox" name="sexo" value="Mujer">
        </p>

        <label for="">Color</label>
        <p><input type="color" name="color"></p>

        <label for="">Fecha</label>
        <p><input type="date" name="fecha"></p>

        <label for="">Correo</label>
        <p><input type="email" name="correo"></p>

        <label for="">Archivo</label>
        <p><input type="file" name="archivo" multiple></p>

        <label for="">Número</label>
        <p><input type="number" name="numero"></p>

        <label for="">Contraseña</label>
        <p><input type="password" name="pass"></p>

        <label for="">Continente</label>
        <p>
        America del sur: <input type="radio" name="continente" value="America del sur">
            Europa: <input type="radio" name="continente" value="Europa">
            Asia: <input type="radio" name="continente" value="Asia">
        </p>

        <label for="">Página URL</label>
        <p><input type="url" name="url"></p>

        <label for="">Descripción</label>
        <p><textarea name="descripcion"></textarea></p>

        <label for="">Peliculas: </label>
        <p><select name="peliculas" id="">
            <option value="Spider-Man">Spider-Man</option>
            <option value="Batman">Batman</option>
            <option value="Superman">Superman</option>
        </select></p>

        <input type="submit" value="Enviar">

    </form>
    
</body>
</html>