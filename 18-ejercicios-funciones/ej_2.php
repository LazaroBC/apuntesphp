<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Ejercicios funciones</title>
</head>

<body class=container>
    <h1>Ejercicio 2 arrays</h1>
    <?php
    /*
    * Escribir un programa que añada valores a un array mientras que su longitud sea menor a 120
    * mostrarlo por pantalla.
    */

    $valores = [];
    $contador = 0;
    while (count($valores) < 120) {
        array_push($valores, $contador);
        $contador++;
    }
    foreach ($valores as $key => $valor) {
        echo "$valor, ";
    }
    var_dump($valores);

    ?>

</body>

</html>