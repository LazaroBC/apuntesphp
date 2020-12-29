<?php

if (isset($_POST)){
    // Conexión a la BBDD
    require_once 'includes/conexion.php';

    // Iniciar sesión
    if(!isset($_SESSION)){
        session_start();
    }
    // Recoger los valores del formulario de registro
    if (isset($_POST['nombre'])){
         $nombre = mysqli_real_escape_string($db, $_POST['nombre']) ;
    }else {
        $nombre = false;
    }
    // mysqli_real_escape_string Evita la inyeccion de codigo sql ya que cualquier ' "" / que pusieran en el argumento lo interpretaría como string
    $apellidos = isset($_POST['apellidos']) ? mysqli_real_escape_string($db, $_POST['apellidos'])  : false;
    $email = isset($_POST['email']) ? mysqli_real_escape_string($db, trim($_POST['email'])) : false;
    $password = isset($_POST['password']) ? mysqli_real_escape_string($db, $_POST['password']) : false;

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

    // Validar contraseña
    if (!empty($password)){
        $password_validate = true;
    }else {
        $password_validate = false;
        $errores['password'] =  "Contraseña se encuentra vacía";
    }
}

$guardar_usuario = false;

if (count($errores) == 0) {
    $guardar_usuario = true;

    // Cifrado de la contraseña
    $password_segura = password_hash($password, PASSWORD_BCRYPT, ['cost'=>4]);
    
    // Insertar usuario en la base de datos
    $sql = "INSERT INTO usuarios VALUES(null, '$nombre', '$apellidos', '$email', '$password_segura', CURDATE());";
    $guardar = mysqli_query($db,$sql);


    if ($guardar) {
        $_SESSION['completado'] = "El registro se ha completado.";
    }else {
        $_SESSION['errores']['general'] = "Fallo al guardar el usuario";
    }  
}else{
    $_SESSION['errores'] = $errores;
}
header('Location: index.php');// Redirección
?>