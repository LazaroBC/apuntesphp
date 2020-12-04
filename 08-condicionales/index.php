<?php

// Operadores de comparación
// ==(igual a) ===(identico, incluido tipo) !=(distinto) <>(diferente)
// !==(no identico) <(menor que) >(mayor que) <=(menor o igual) >=(mayor o igual)
// Operadores lógicos
// && (AND Y) ||(OR O) !(NOT NO)


$color = "rojo";

if ($color == "rojo") {
    echo "Es rojo";
} else {
    echo "No es rojo";
}

echo "<hr>";

$year = 2018;
if ($year < 2019) {
    echo "Año anterior a 2019";
}else {
    echo "Año posterior a 2019";
}

echo "<hr>";

$nombre = "Lázaro";
$ciudad = "Valencia";
$continente = "Europa";
$edad = 23;
$mayoria_edad = 18;

if ($edad >= $mayoria_edad) {
    echo "<h2> $nombre es mayor de edad</h2>";
    if($continente=="Europa"){
        echo "<h3> y es de $ciudad</h3>";
    }else {
        echo "<h3> No es de Europa</h3>";
    }
}else{
    echo "<h3> $nombre no es mayor de edad</h3>";
}

echo "<hr>";

$dia = 6;

if ($dia == 1){
    echo "Es lunes";
}elseif ($dia==2){
    echo "Es martes";
}elseif ($dia==3){
    echo "Es miércoles";
}elseif ($dia==4){
    echo "Es jueves";
}elseif ($dia==5){
    echo "Es viernes";
}elseif ($dia==6){
    echo "Es sabado";
}elseif ($dia==7){
    echo "Es domingo";
}

echo "<hr>";

$edad1 = 18;
$edad2 = 65;
$edadOficial = 20;

if ($edadOficial >= $edad1 && $edadOficial <= $edad2){
    echo "Está en edad de trabajar";
}else {
    echo "No puede trabajar";
}

echo "<hr>";

$pais = "México";
if ($pais == "México" || $pais =="España" || $pais == "Colombia"){
    echo "Se habla español";
}else {
    echo "No se habla español";
}

echo "<hr>";

$dia = 4;

switch ($dia){
    case 1:
        echo "Es lunes";
    break;
    case 2:
        echo "Es martes";
    break;
    case 3:
        echo "Es miércoles";
    break;
    case 4:
        echo "Es jueves";
    break;
    case 5:
        echo "Es viernes";
    break;
    case 6:
        echo "Es sabado";
    break;
    case 7:
        echo "Es domingo";
    break;
    default:
        echo "No entiendo tus intenciones";
}

echo "<hr>";

// GOTO

goto marca;
echo "<h3> Instrucción 1</h3>";
echo "<h3> Instrucción 2</h3>";
echo "<h3> Instrucción 3</h3>";
echo "<h3> Instrucción 4</h3>";

marca: 
echo "<h1>Me he saltado 4 echos</h1>";
echo "<hr>";


?>