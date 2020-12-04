<?php

// WHILE (mientras, cuidado con los bulces infinitos)

$numero = 50;
while ($numero <= 100){
    echo $numero;
    if ($numero != 100){
        echo ", ";
    }else{
        echo ".";
    }
    $numero++;
}

echo "<hr>";

if(isset($_GET['numero'])){
    $numero = (int)$_GET['numero'];
}else {
    $numero = 1;
}

echo "<h1>Tabla de multiplicar del número $numero</h1>";

$contador = 0;
while ($contador <= 10){
    echo "$numero X $contador = " . $numero * $contador . "<br>";
    $contador++;
}

echo "<hr>";
// DO WHILE

$edad = 8;
$contador = 1;
do{
    echo "Tienes acceso al local privado $contador<br>";
    $contador++;
}while($edad >= 18 && $contador <= 10);


?>