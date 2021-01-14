<?php

if (isset($_POST)){
    // Conexión a la BBDD
    require_once 'includes/conexion.php';

    // Recoger los valores del formulario de actualización
    // mysqli_real_escape_string Evita la inyeccion de codigo sql ya que cualquier ' "" / que pusieran en el argumento lo interpretaría como string
    $nombre = isset($_POST['nombre']) ? mysqli_real_escape_string($db, $_POST['nombre'])  : false;
    $apellidos = isset($_POST['apellidos']) ? mysqli_real_escape_string($db, $_POST['apellidos'])  : false;
    $email = isset($_POST['email']) ? mysqli_real_escape_string($db, trim($_POST['email'])) : false;

    // Array de errores
    $errores = array();
 
    // Validar datos antes de guardar en base de datos

    //Validar campo nombre
    if (!empty($nombre) && !is_numeric($nombre) && !preg_match("/[0-9]/",$nombre)){
        $nombre_validate = true;
    }else {
        $nombre_validate = false;
        $errores['nombre'] =  "Nombre no válido";
    }

    // Validar apellidos
    if (!empty($apellidos) && !is_numeric($apellidos) && !preg_match("/[0-9]/",$apellidos)){
        $apellidos_validate = true;
    }else {
        $apellidos_validate = false;
        $errores['apellidos'] =  "Apellidos no válidos";
    }

    // Validar el email
    if (!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)){
        $email_validate = true;
    }else {
        $email_validate = false;
        $errores['email'] =  "Email no válido";
    }

}

$guardar_usuario = false;

if (count($errores) == 0) {
    $usuario = $_SESSION['usuario'];
    $guardar_usuario = true;
    
    // Comprobar si el email ya existe
    $sql = "SELECT id, email FROM usuarios WHERE email = '$email';";
    $isset_email = mysqli_query($db, $sql);
    $isset_user = mysqli_fetch_assoc($isset_email);

    if($isset_user['id'] == $usuario['id'] || empty($isset_user)) {
    // Actualizar usuario en la base de datos
    
    $sql =  "UPDATE usuarios SET " . 
            "nombre = '$nombre', " .
            "apellidos = '$apellidos', " .
            "email = '$email' " .
            "WHERE id = ". $usuario['id'];
    $guardar = mysqli_query($db,$sql);


    if ($guardar) {
        $_SESSION['usuario'] ['nombre'] = $nombre;
        $_SESSION['usuario'] ['apellidos'] = $apellidos;
        $_SESSION['usuario'] ['email'] = $email;
        $_SESSION['completado'] = "Tus datos se han completado.";
    }else {
        $_SESSION['errores']['general'] = "Fallo al actualizar tus datos";
    }  
}else{
    $_SESSION['errores']['general'] = "El usuario ya existe";
}
}

header('Location: mis-datos.php');// Redirección
?>