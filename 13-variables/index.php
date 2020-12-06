<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" 
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Variables</title>
</head>
<body class=container>
    <h1>Variables</h1>
    <?php
    /* 
    * Variables locales: Se definen dentro de la función y no pueden ser usadas fuera de la función.
    * Variables globales: Se declaran fuera de una función y pueden ser usadas dentro y fuera de las funciones.
    */

    // Variable global
    $frase = "Ni los genios son tan genios ni los mediocres tan mediocres";
    echo $frase;
    echo "<hr>";
    function holaMundo(){
        global $frase; // para usar las variables globales dentro de una función es preciso decir que es una variable global.
        echo "<h3>$frase</h3>";
        $year = 2021; // Esta variable no puede ser llamada fuera de la función.
        echo "<h3>$year</h3>";
        echo "<hr>";
        return $year;
    }

    echo holaMundo();
    echo "<hr>";
    // Uso de variables para almacenar funciones

    function buenosDias()
    {
        return "Buenos días por la mañana";
    }

    function buenasTardes(){
        return "Buenas tardes después de comer";
    }

    function buenasNoches(){
        return "Buenas noches a dormir";
    }

    $horario = "buenosDias";
    echo $horario();
    echo "<hr>";
    
    $horario = "buenasTardes";
    echo $horario();
    echo "<hr>";

    $horario = "Noches";
    $miFuncion = "buenas".$horario;
    echo $miFuncion();
    echo "<hr>";

    /* Tambien funcionaría
    * $horario = $_GET['horario'];
    * $horario = "Noches";
    * $miFuncion = "buenas".$horario;
    * echo $miFuncion();
    * echo "<hr>";
    */

    ?>
</body>
</html>