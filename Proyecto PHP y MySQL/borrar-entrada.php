<?php 

require_once 'includes/conexion.php';
session_start();

if($_SESSION['usuario'] && isset($_GET['id'])){
    $sql = "DELETE FROM entradas WHERE usuario_id = {$_SESSION['usuario']['id']} AND id = {$_GET['id']}";
    mysqli_query($db, $sql);
}

header('Location: index.php');