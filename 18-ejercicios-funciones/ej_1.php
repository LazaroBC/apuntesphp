<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Ejercicios funciones</title>
</head>

<body class=container>
    <h1>Ejercicio 1 arrays</h1>
    <?php
    /* Hacer un programa que tenga un array con 8 números y que haga:
* 1.- Recorrerlo y mostrarlo
* 2.- Ordenarlo y mostrarlo
* 3.- Mostrar su longitud
* 4.- Buscar algún elemento
* 5.- Buscar el elemento que me llegue por parametro de la url
*/

    // Funciones
    function mostrarArray($numeros)
    {
        $resultado = "";
        foreach ($numeros as $key => $numero) {
            $resultado .= $key . ": " . $numero . "<br>";
        }

        return $resultado;
    }
    // crear array
    $numeros = [122, 23, 43, 6784, 5223, 216, 27, 348];

    echo "<h3>1.- Recorrerlo y mostrarlo</h3> ";
    echo (mostrarArray($numeros));
    echo "<hr>";

    echo "<h3>2.- Ordenarlo y mostrarlo</h3> ";
    sort($numeros);
    echo (mostrarArray($numeros));
    echo "<hr>";

    echo "<h3>3.- Mostrar su longitud</h3> ";
    echo count($numeros);
    echo "<hr>";

    $busqueda = 6784;
    echo "<h3>4.- Buscar el elemento $busqueda</h3> ";
    if (array_search($busqueda, $numeros)) {
        $resultado = array_search($busqueda, $numeros);
        echo "El indice del número buscado es $resultado";
        echo "<br>";
        echo "El número buscado es $numeros[$resultado]";
        echo "<hr>";
    } else {
        echo "<h3>El número a buscar no existe</h3>";
        echo "<hr>";
    }

    if (isset($_GET['search'])) {
        $parametro = $_GET['search'];

        echo "<h3>5.- Buscar el elemento get de url $parametro</h3> ";
        if (array_search($parametro, $numeros)) {
            $resultado2 = array_search($parametro, $numeros);
            echo "El indice del número buscado es $resultado2";
            echo "<br>";
            echo "El número buscado es $numeros[$resultado2]";
            echo "<hr>";
        } else {
            echo "<h3>El número a buscar no existe</h3>";
            echo "<hr>";
        }
    }else {
        echo "no existe el parametro get";
    }

    ?>

</body>

</html>