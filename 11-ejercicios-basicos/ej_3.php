<?php

/* Ejercicio 3:
Imprimir por pantalla los cuadrados de los40 primeros números naturales
Utilizar bucle while
*/

$numero = 0;
while ($numero <= 40){
    $resultado = $numero*$numero;
    echo $resultado;
    if ($numero != 40){
        echo ", ";
    }else{
        echo ".";
    }
    $numero++;
}

echo "<hr>";

?>