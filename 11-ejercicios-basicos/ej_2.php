<?php

/*
Ejercicio 2:
Sacar todos los números pares del 1 al 100
*/
echo "<h1>Números pares</h1>";
for ($i = 1; $i <= 100; $i++) {
    if ($i % 2 == 0 && $i != 100) {
        echo $i . ", ";
    }
}
echo $i . ".";
echo "<hr>";

$numero = 2;
while ($numero <= 100) {
    echo $numero;
    if ($numero != 100) {
        echo ", ";
    } else {
        echo ".";
    }
    $numero = $numero + 2;
}

echo "<hr>";
