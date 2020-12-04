<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- Ejercicio 5:
    Hacer un programa que muestre todos los números entre dos numeros que nos lleguen por la url -->

    <?php

    if (isset($_GET['uno']) && isset($_GET['dos'])) {
        
        $uno = $_GET['uno'];
        $dos = $_GET['dos'];
        if ($uno >$dos){
            echo "<h1>El primer valor debe de ser menor que el segundo</h1>";
        } else{
            for ($i = $uno; $i <= $dos; $i++) {
                echo $i . ", ";
            }
        }
        
    }
    ?>

</body>

</html>