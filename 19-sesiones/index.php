<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Sesiones</title>
</head>

<body class=container>
    <h1>Sesiones</h1>
    <?php
    /*
     * Sesión: Almacenar y persistir datos del usuario mientras que navega en un sitio web
     * y hasta que cierra sesión o el navegador.
     */

    // Iniciar la sesión

    session_start();
    // Variable local
    $variable_normal = "Soy una cadena de texto";

    // Variable de sesión
    $_SESSION['variable_persistente'] = "Soy una sesión activa";

    echo $variable_normal;
    echo "<hr>";
    echo $_SESSION['variable_persistente'];
    ?>

</body>

</html>