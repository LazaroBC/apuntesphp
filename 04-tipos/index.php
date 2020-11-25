<?php

/*
Tipos de datos

Entero (int/ integer) = 99
Coma flotante/decimales (float/double) = 3.45
Cadenas de caracteres (strings) = "Hola soy un string"
Boleano (bool) = true false 
null
Colección de datos (Array )
Objetos
*/
$numero = 100;
$decimal = 27.9;
$texto = 'Soy un texto';
$verdadero = true;
$nula = null;
echo "Variable número: " . gettype($numero) . '<br>';
echo "Variable decimal: " . gettype($decimal) . '<br>';
echo "Variable texto: " . gettype($texto) . '<br>';
echo "Variable verdadero: " . gettype($verdadero) . '<br>';
echo "Variable nula: " . gettype($nula) . '<br>';
echo 'Soy un texto \n$texto' . '<br>';
echo "Soy un texto con comillas dobles \n$texto" . '<br>';
// Debugear
$mi_nombre[] = 'Lázaro Belloch Canet';
$mi_nombre[] = 'Lázaro Belloch Canet';
$mi_nombre[] = 'Lázaro Belloch Canet';
var_dump($mi_nombre);
?>