<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Ejercicios funciones</title>
</head>

<body class=container>
    <h1>Ejercicio 3 arrays</h1>
    <?php
/*
 * Programa que compruebe si una variable está vacía y si está vacía 
 * rellenarla con texto en minusculas y mostrarlo en mayusculas y negrita.
 */

$variable = "";

if (empty($variable)){
    $variable = "variable";
    $variable = strtoupper($variable);
    echo "<strong>$variable</strong>";
}else {
    echo "La variable tiene contenido $variable";
}

    ?>

</body>

</html>