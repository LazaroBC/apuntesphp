<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Cookies</title>
</head>

<body class=container>
    <h1>Ver cookies</h1>
    <?php
    /**
     * Para mostrar el valor de las cookies tengo que usar $_COOKIE,
     * variable super global y es un array asociativo.
     */

    if (isset($_COOKIE['miCookie'])){
        echo "<h3>" . $_COOKIE['miCookie'] ."</h3>";
    }else {
        echo "No existe la cookie";
    }
    if (isset($_COOKIE['aYear'])){
        echo "<h3>" . $_COOKIE['aYear'] ."</h3>";
    }else {
        echo "No existe la cookie";
    }
    ?>
    <a href="crear_cookies.php">Crear mis galletas</a>
    <br>
    <a href="borrar_cookies.php">Borrar mis galletas</a>
</body>

</html>