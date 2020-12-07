
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" 
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Arrays</title>
</head>
<body class=container>
<?php

// Arrays, colcecciones

$peliculas = array('Batman', 'Spiderman', 'El señor de los anillos');
$cantantes = ['Bisbal', 'Serrat', 'Sabina'];
// Array asociativo
$personas = array (
    'nombre' => 'Lázaro',
    'apellidos' => 'Belloch Canet',
    'telefono' => '626789811'
);


var_dump($peliculas);
echo "<br>";
var_dump($peliculas[2]);
echo "<br>";
var_dump($cantantes);
echo "<hr>";
var_dump($personas);
echo "<hr>";

echo "<h1>Listado de películas</h1>";

echo "<ul>";
for($i = 0; $i < count($peliculas); $i++){
    echo "<li>" . $peliculas[$i] . "</li>";
    
}
echo "</ul>";
echo "<hr>";

echo "<h1>Listado de cantantes</h1>";
echo "<ul>";
foreach($cantantes as $cantante){
    echo "<li>" . $cantante . "</li>";
}
echo "</ul>";
echo "<hr>";

// Arrays multidimensionales

$contactos = array (
    array(
        'nombre' => 'Antonio',
        'email' => 'antonio@gmail.com'
    ),
    array(
        'nombre' => 'Luis',
        'email' => 'luis@gmail.com'
    ),
    array(
        'nombre' => 'Jorge',
        'email' => 'jorge@gmail.com'
    ),

);

var_dump($contactos);
echo "<hr>";
// Acceder a Luis
echo $contactos[1]['nombre'];
echo "<hr>";

foreach($contactos as $key => $contacto){
    var_dump($contacto['nombre']);
    echo "<hr>";
}
echo "<hr>";
?>

</body>
</html>