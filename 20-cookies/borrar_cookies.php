<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Cookies</title>
</head>

<body class=container>
    <h1>Borrar Cookies</h1>
    <?php
    /**
     * Para borrar las cookies
     */
    if ($_COOKIE['miCookie']){
        unset($_COOKIE['miCookie']);
        setcookie('miCookie','',time()-100);
    }
    header('Location:ver_cookies.php');


    ?>

</body>

</html>