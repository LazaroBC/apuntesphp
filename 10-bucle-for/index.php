<?php

$resultado = 0;
for ($i = 0; $i <= 100; $i++){
    if ($resultado < 0 ){
        echo "No me gustan los números negativos";
    break;
    }
    $resultado += $i;
}

echo "<h1>El resultado es: " . $resultado . "</h1>";


?>