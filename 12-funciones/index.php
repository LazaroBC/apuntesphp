<?php

/*
* Funciones
*/

function muestraNombres(){
    echo "Victor Robles <br>";
    echo "Raquel Robles <br>";
    echo "Lourdes Robles <br>";
    echo "Lázaro Robles <br>";
    echo "<hr>";
}

muestraNombres();
muestraNombres();

function tabla($numero){
    var_dump($numero);
    echo $numero;
    echo "<hr>";
    echo "<h3>Talba demultiplicar de número $numero</h3>";
    for ($i = 1; $i <= 10; $i++){
        echo "$numero x $i = " . ($numero*$i) . "<br>";  
    }
}

tabla(5);
echo "<hr>";

if (isset($_GET['numero'])){
    tabla($_GET['numero']);
}else{
    echo "No hay número para sacar la tabla";
}

// Calculadora
echo "<hr>";
function calculadora($numero1, $numero2){
    // conjunto de instrucciones a ejecutar
    $suma = $numero1 + $numero2;
    $resta = $numero1 - $numero2;
    $multiplicacion = $numero1 * $numero2;
    $division = $numero1 / $numero2;
    echo "Suma: $suma<br>";
    echo "Resta: $resta<br>";
    echo "Multiplicación: $multiplicacion<br>"; 
    echo "División: $division<br>";
}

calculadora(3,5);
echo "<hr>";

// Parametros opcionales
function calculadora2($numero1, $numero2, $negrita = false){
    
    // conjunto de instrucciones a ejecutar
    $suma = $numero1 + $numero2;
    $resta = $numero1 - $numero2;
    $multiplicacion = $numero1 * $numero2;
    $division = $numero1 / $numero2;
    
    $cadena_texto = "";
    if ($negrita){
        $cadena_texto .= "<h1>";
    }
    
    $cadena_texto .= "Suma: $suma<br>";
    $cadena_texto .= "Resta: $resta<br>";
    $cadena_texto .= "Multiplicación: $multiplicacion<br>"; 
    $cadena_texto .= "División: $division<br>";

    if ($negrita != false){
        $cadena_texto .= "</h1>";
    }

    return $cadena_texto;
}
// No imprime la función pero sí la ejecuta
calculadora2(47,3);
// Buena práctica.
echo calculadora2(47,3);
echo "<hr>";
echo calculadora2(47,3, true);
echo "<hr>";


// return. La función debe hacer algo y devolver algo.
// funciones dentro de otras funciones
function getNombre($nombre)
{
    $texto = "El nombre es: $nombre";
    return $texto;
}

function getApellidos($apellidos)
{
    $texto = "Los apellidos son: $apellidos";
    return $texto;
}

function devulveElNombre($nombre, $apellidos){
    $texto = getNombre($nombre)
            . "<br>" .
            getApellidos($apellidos);
    return $texto;
}

echo devulveElNombre('Lázaro','Belloch Canet');

echo "<hr>";




