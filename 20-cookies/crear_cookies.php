<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Cookies</title>
</head>

<body class=container>
    <h1>Cookies</h1>
    <?php
    /**
     * Cookie: fichero que se almacena en el ordenador del usuario
     * que visita la web, con el fin de recordar datos o rastrear
     * el comportamiento del mismo en la web.
     */

    // Crear cookie

    // setcookie("nombre", "valor que solo puede ser texto", caducidad, ruta, dominio);
    // cookie básica
    setcookie("miCookie", "Valor de mi galleta");

    // Cookie con expiración
    setcookie("aYear", "Valor de la cookie 365 días", time()+(60*60*24*365));

    header('Location:ver_cookies.php');
    ?>
    <a href="ver_cookies.php">Ver las galletas</a>
</body>

</html>