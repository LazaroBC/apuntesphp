<?php

/* Ejercicio 4:
 Recoger dos números por la url (Parametros GET) y calcular todas las operaciones básicas.
*/
$uno = intval($_GET['operador1']);
$dos =intval($_GET['operador2']);
echo "<h1>SUMA: " . ($uno + $dos) . "</h1>";
echo "<hr>";
echo "<h1>RESTA: " . ($uno - $dos) . "</h1>";
echo "<hr>";
echo "<h1>MULTIPLICACIÓN: " . ($uno * $dos) . "</h1>";
echo "<hr>";
echo "<h1>DIVISIÓN: " . ($uno / $dos) . "</h1>";
echo "<hr>";

if (isset($_GET['operador1']) && isset($_GET['operador2'])) 
{
    $uno = $_GET['operador1'];
    $dos = $_GET['operador2'];
    echo "<h1>SUMA: " . ($uno + $dos) . "</h1>";
    echo "<hr>";
    echo "<h1>RESTA: " . ($uno - $dos) . "</h1>";
    echo "<hr>";
    echo "<h1>MULTIPLICACIÓN: " . ($uno * $dos) . "</h1>";
    echo "<hr>";
    echo "<h1>DIVISIÓN: " . ($uno / $dos) . "</h1>";
    echo "<hr>";
}
else {
    echo "Introduce los valores por url";
}

?>