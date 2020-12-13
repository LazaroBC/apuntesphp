<?php
session_start();

if (isset($_GET['sumar']) ) {
    $_SESSION['operacion'] =  $_GET['operador1'] . " + " . $_GET['operador2'];
    $_SESSION['calculo'] = (int)$_GET['operador1'] + (int)$_GET['operador2'];
    echo "Calculando...";
    header("Refresh: 3; URL=ej_3.php");
}

if (isset($_GET['restar']) ) {
    $_SESSION['operacion'] =  $_GET['operador1'] . " - " . $_GET['operador2'];
    $_SESSION['calculo'] = (int)$_GET['operador1'] - (int)$_GET['operador2'];
    echo "Calculando...";
    header("Refresh: 3; URL=ej_3.php");
}

if (isset($_GET['multiplicar']) ) {
    $_SESSION['operacion'] =  $_GET['operador1'] . " X " . $_GET['operador2'];
    $_SESSION['calculo'] = (int)$_GET['operador1'] * (int)$_GET['operador2'];
    echo "Calculando...";
    header("Refresh: 3; URL=ej_3.php");
}

if (isset($_GET['dividir']) ) {
    $_SESSION['operacion'] =  $_GET['operador1'] . " / " . $_GET['operador2'];
    $_SESSION['calculo'] = (int)$_GET['operador1'] / (int)$_GET['operador2'];
    echo "Calculando...";
    header("Refresh: 3; URL=ej_3.php");
}

?>