<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- Ejercicio 7:
    Hacer un programa que muestre todos impares los números entre dos numeros que nos lleguen por la url -->

    <?php

    if (isset($_GET['uno']) && isset($_GET['dos'])) {
        
        $uno = $_GET['uno'];
        $dos = $_GET['dos'];
        if ($uno >$dos){
            echo "<h1>El primer valor debe de ser menor que el segundo</h1>";
        } else{
            for ($i = $uno; $i <= $dos; $i++) {
                if ($i%2 == 1){
                    echo $i . ", ";
                }  
            }
        }
        
    }
    ?>

</body>

</html>