<?php
$error = 'faltan_datos';
if (
    !empty($_POST['nombre'])
    && !empty($_POST['apellidos'])
    && !empty($_POST['edad'])
    && !empty($_POST['email'])
    && !empty($_POST['pass'])
) {
    $error = 'ok';

    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $edad = (int)$_POST['edad'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];

    // Validar nombre
    if (!is_string($nombre) || preg_match("/[0-9]+/", $nombre)) {
        $error = 'nombre';
    }
    if (!is_string($apellidos) || preg_match("/[0-9]+/", $apellidos)) {
        $error = 'apellidos';
    }
    if (!is_int($edad) || !filter_var($edad, FILTER_VALIDATE_INT)) {
        $error = 'edad';
    }
    if (!is_string($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = 'email';
    }
    if (empty($pass) || strlen($pass) < 5) {
        $error = 'password';
        echo "Contraseña";
    }
    // var_dump($_POST);
    // var_dump($error);
    // die();
} else {
    $error = 'faltan_datos';
    header('Location:index.php?error=' . $error);
}

if ($error != 'ok') {
    header('Location:index.php?error=' . $error);
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Validación</title>
</head>

<body class="container">
    <?php if ($error == 'ok') : ?>
        <h1>Datos Validados Correctamente</h1>
        <p><?= $nombre ?></p>
        <p><?= $apellidos ?></p>
        <p><?= $edad ?></p>
        <p><?= $email ?></p>
    <?php endif; ?>

</body>

</html>