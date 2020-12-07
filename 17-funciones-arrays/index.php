
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" 
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Funciones arrays</title>
</head>
<body class=container>
<?php

// Arrays, colecciones

$peliculas = array('Batman', 'Spiderman', 'El señor de los anillos');
$cantantes = ['Bisbal', 'Serrat', 'Sabina','Lázaro','Lulú'];
$numeros = [1,2,3,4,5,6,7,8];

// orden alfabético hace mal los acentos
asort($cantantes);
var_dump($cantantes);
echo "<hr>";
// orden inverso
arsort($cantantes);
var_dump($cantantes);
echo "<hr>";
// añadir elemento al final
$cantantes[] = "Meca";
array_push($cantantes,'Bustamante');
var_dump($cantantes);
echo "<hr>";
// Eliminar último elemento
array_pop($cantantes);
var_dump($cantantes);
echo "<hr>";
// Eliminar un elemento concreto
unset($cantantes[2]);
var_dump($cantantes);
echo "<hr>";
// sacar elemento aleatorio
array_rand($cantantes);
echo ($cantantes[array_rand($cantantes)]);
echo "<hr>";
// Dar vuelta al array
var_dump(array_reverse($numeros));
echo "<hr>";

// Buscar dentro de un array
$resultado = array_search('Serrat', $cantantes);
echo $resultado;
echo "<br>";
echo $cantantes[$resultado];
echo "<hr>";
// Contar la cantidad de elemntos que hay en un array
echo count($cantantes);
echo "<hr>";
echo sizeof($cantantes);
echo "<hr>";

?>

</body>
</html>