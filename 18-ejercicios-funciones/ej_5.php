<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Ejercicios funciones</title>
</head>

<body class=container>
    <h1>Ejercicio 4</h1>
    <?php
    /*
 * Crear un array con el contenido de la siguiente tabla:
 * ACCION  AVENTURA  DEPORTE
 * GTA     ASSASINS  PES 19
 * COD     CRASH     MOTO GP
 * PUG     PERSIA    FIFA19
 * 
 * Cada columna en un fichero separado(includes)
 */

    $tabla = array(
        "ACCION" => array("GTA", "COD", "PUG"),
        "AVENTURA" => array("ASSASINS", "CRASH", "PERSIA"),
        "DEPORTE" => array("PES 19", "MOTO GP", "FIFA 19")
    );

    $categoria = array_keys($tabla);
    ?>

    <table border="5">
        <?php require_once 'includes_ej_5/encabezados.php'?>
        <?php require_once 'includes_ej_5/primeraFila.php'?>
        <?php require_once 'includes_ej_5/segundaFila.php'?>
        <?php require_once 'includes_ej_5/terceraFila.php'?>
    </table>

</body>

</html>