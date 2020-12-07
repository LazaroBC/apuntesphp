<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Tablas de multiplicar</title>
</head>

<body class="container">
    <?php

    /*
    Ejercicio 6:
    Imprimir  por pantalla todas las tablas del 1 al 10 en una tabla de html.
*/
    echo "<table class='table table-striped table-dark'> <tr>"; // Inicio de la tabla
    echo "<tr>";// Inicio Fila 1
    for ($i = 1; $i <= 10; $i++){
        echo "<td >Tabla del $i </td>" ;
    }
    echo "</tr>";// cierra Fila 1
    echo "<tr>";// Inicio Fila 2
    for ($j = 1; $j <= 10; $j++){
        echo "<td>";
        for ($k = 1; $k <= 10; $k++) {
            echo  $j . "x" . $k . "= " . ($j * $k) . "<br>";
        }
        echo "</td>";
    }
    echo "</tr>";// Cierra Fila 2
    echo "</table>"; // Fin de la tabla
    ?>
</body>

</html>