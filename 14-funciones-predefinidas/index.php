<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" 
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Variables predefinidas</title>
</head>
<body class=container>
    <h1>Variables</h1>
    <?php

    $nombre = "Lázaro Belloch";
    // Nos dice el tipo de la variable y el contenido
    var_dump($nombre);

    // Fechas
    echo "<hr>";
    echo "Función date()<br>";
    echo date('d-m-Y');
    echo "<br>";
    echo date('d-M-y');
    echo "<hr>";
    echo "Función time()<br>";
    echo time(); // Formato UNIX
    echo "<hr>";
    
    // Matemáticas
    echo "Ráiz cuadrada de 10: " . sqrt(10);
    echo "<br>";
    echo "Número aleatorio entre 10 y 40: " . rand(10,40);
    echo "<br>";
    echo "Número Pi: " . pi();
    echo "<br>";
    echo "Redondear 7.34567: " . round(7.34567);
    echo "<br>";
    echo "Redondear 7.34567: " . round(7.34567, 2);
    echo "<hr>";
    // Funciones generales
    // tipo variable
    echo gettype($nombre); 
    echo "<br>";
    $nombre = "Lázaro";
    if(is_string($nombre)){
        echo "Esa variable es un string";
    }
    echo "<br>";
    // Comprobar si existe
    $nombre = 21;
    if(is_float($nombre)){
        echo "Esa variable es un float";
    }else{
        echo "Esa variable no es un float";
    }
    echo "<br>";
    if (isset($edad)){
        echo "La variable existe";
    }else {
        echo "La variable no existe";
    }
    echo "<br>";
    $frase = "           mi contenido     ";
    var_dump($frase);
    var_dump(trim($frase)); // trim() limpia de espacios por delante y por detrás
    echo "<hr>";

    // Eliminar variables / indices
    $year = 2020;
    unset($year);
    var_dump($year);
    echo "<hr>";

    // Comprobar variable vacía
    // $texto = "";
    if(empty($texto)){
        echo "La variable texto está vacía o no existe";
    }else {
        echo "La variable tiene contenido";
    }
    echo "<hr>";

    // Tamaño de un cadena
    $cadena = "La vida es bella";
    echo strlen($cadena);
    echo "<hr>";

    // Encontrar cadena de caracteres
    echo strpos($cadena, "vida"); // Posición a partir de cero
    echo "<hr>";

    // Reemplazar palabras dentro de un string
    $frase = str_replace("bella", "hermosa", $cadena);
    
    echo "$cadena --- $frase";

    echo "<hr>";
    // Mayúsculas y minúsculas
    echo strtolower($cadena);
    echo "<br>";
    echo strtoupper($cadena);

    echo "<hr>";
    ?>
</body>
</html>