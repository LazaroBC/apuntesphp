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
 * Crear un script que tenga 4 variables, una de tipo array,
 * otra string, otra int y otra booleana 
 * y que imprima un mensaje según el tipo de variable que sea.
 */

$var1 = [1,2,3,4,5];
$var2 = "casa";
$var3 = 4;
$var4 = true;

if (is_array($var1)){
    var_dump($var1);
    echo "  es un array";
    echo "<hr>";
}
if (is_string($var2)){
    echo "$var2 es un string";
    echo "<hr>";
}
if (is_integer($var3)){
    echo "$var3 es un int";
    echo "<hr>";
}
if (is_bool($var4)){
    echo "$var4 es un boleano";
    echo "<hr>";
}

    ?>

</body>

</html>