<?php
function mostrarError($errores, $campo)
{
    $alerta = '';
    if (isset($errores[$campo]) && !empty($campo)) {
        $alerta = "<div class='alerta alerta-error'>$errores[$campo]</div>";
    }

    return $alerta;
}

function borrarErrores()
{
    $borrado = false;
    if (isset($_SESSION['errores'])) {
        $_SESSION['errores'] = null;
        unset($_SESSION['errores']);
    }

    if (isset($_SESSION['completado'])) {
        $_SESSION['completado'] = null;
        unset($_SESSION['completado']);
    }

    if (isset($_SESSION['errores_entrada'])) {
        $_SESSION['errores_entrada'] = null;
        unset($_SESSION['errores_entrada']);
    }

    if (isset($_SESSION['errores_categoria'])) {
        $_SESSION['errores_categoria'] = null;
        unset($_SESSION['errores_categoria']);
    }

    return $borrado;
}

function conseguirCategorias($conexion){
    
    $sql = "SELECT * FROM categorias ORDER BY nombre ASC";
    $categorias = mysqli_query($conexion, $sql);
    
    if($categorias && mysqli_num_rows($categorias) >= 1){
        return $categorias;
    }else{
        return false;
    }

}

function conseguirCategoria($conexion, $id){
    
    $sql = "SELECT * FROM categorias WHERE id = $id";
    $categoria = mysqli_query($conexion, $sql);
    
    $resultado = $categoria ? mysqli_fetch_assoc($categoria) : false;

    return $resultado;

}

/*
function conseguirUltimasEntradas($conexion){

    $sql = "SELECT e.*, c.nombre AS 'categoria' FROM entradas e INNER JOIN categorias c ON e.categoria_id = c.id".
    " ORDER BY e.id DESC LIMIT 4";
    $entradas = mysqli_query($conexion, $sql);

    if($entradas && mysqli_num_rows($entradas) >= 1){
        return $entradas;
    }else{
        return false;
    }
}
    */

function conseguirEntradas($conexion, $limit = null, $categoria_id = null, $busqueda = null){

    $sql = "SELECT e.*, c.nombre AS 'categoria' FROM entradas e INNER JOIN categorias c ON e.categoria_id = c.id";

    if(!empty($categoria_id)){
        $sql .= " WHERE e.categoria_id = $categoria_id";
    }

    if(!empty($busqueda)){
        $sql .= " AND e.titulo LIKE '%$busqueda%'";
    }

    if($limit){
        // $sql = $sql.""
        $sql .= " ORDER BY e.id DESC LIMIT 4";
    };

    $entradas = mysqli_query($conexion, $sql);

    if($entradas && mysqli_num_rows($entradas) >= 1){
        return $entradas;
    }else{
        return false;
    }
}


function conseguirEntrada($conexion, $id){
    $sql = "SELECT e.*, c.nombre AS 'categoria', CONCAT(u.nombre, ' ', u.apellidos) AS 'usuario'".
    " FROM entradas e INNER JOIN categorias c ON e.categoria_id = c.id INNER JOIN usuarios u ON e.usuario_id = u.id".
    " WHERE e.id = $id";

    $entrada = mysqli_query($conexion, $sql);

    $resultado = [];

    if($entrada && mysqli_num_rows($entrada) >= 1){
        $resultado = mysqli_fetch_assoc($entrada);
    }else{
        $resultado = false;
    }

    return $resultado;
}



