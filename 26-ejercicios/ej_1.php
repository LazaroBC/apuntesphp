<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Ejercicios</title>
</head>

<body class=container>
    <h1>Ejercicio 1</h1>

    <?php
    /*
     * Ejercicio 1: Crear una sesión que aumente su valor en uno o disminuya en uno 
     * en función de si el parametro get counter está a uno o a cero
     */
    
    session_start();
    if (!isset($_SESSION['numero'])){
        $_SESSION['numero'] = 0;
    }
    if (isset($_GET['counter']) && $_GET['counter']==1){
        $_SESSION['numero']++;
    }
    if (isset($_GET['counter']) && $_GET['counter']==0){
        $_SESSION['numero']--;
    }

    ?>
    <h1>El valor de la sesion es: <?= $_SESSION['numero']?></h1>
    <a href="ej_1.php?counter=1">Aumentar el valor</a>
    <a href="ej_1.php?counter=0">Disminuir el valor</a>
</body>

</html>