<?php
if (isset($_POST)){
    // Conexión a la BBDD
    require_once 'includes/conexion.php';

    $nombre = isset($_POST['nombre']) ? mysqli_real_escape_string($db, $_POST['nombre']) : false;

    $errores = array();
 
    // Validar datos antes de guardar en base de datos

    //Validar campo nombre
    if (!empty($nombre) && !is_numeric($nombre) && !preg_match("/[0-9]/",$nombre)){
        $nombre_validate = true;
    }else {
        $nombre_validate = false;
        $errores['nombre'] =  "Nombre no válido";
    }

    if (count($errores) == 0) {
        $sql = "INSERT INTO categorias VALUES (null, '$nombre');";
        $guardar = mysqli_query($db, $sql);
    }

}

header('Location: index.php');
?>