<?php 

// Conectar a la base de datos
$conexion = mysqli_connect("localhost", "root", "", "phpmysql");

// Comprobar si la conexion es correcta
if(mysqli_connect_errno()){
    echo "La conexión a la base de datos MySQL ha fallado".mysqli_connect_error();
}else{
    echo "Conexión realizada correctamente";
}

// Consulta para configurar la codificación de caracteres
mysqli_query($conexion, "SET NAMES 'utf8'");

// Consulta SELECT desde PHP
$query = mysqli_query($conexion, "SELECT * FROM notas");
$notas = mysqli_fetch_assoc($query);

while($nota = $notas){
    //var_dump($nota);
    //echo $nota['descripcion'].'<br>';
}
//var_dump($notas);

// Insertar en la base de datos desde PHP
$sql = "INSERT INTO notas VALUES (null, 'Nota desde PHP', 'Esto es una nota desde PHP', 'purple')";
$insert = mysqli_query($conexion, $sql);
if($insert){
    echo "DATOS INSERTADOS CORRECTAMENTE";
}else{
    echo "Error: ".mysqli_error($conexion);
}