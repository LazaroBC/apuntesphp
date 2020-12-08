<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Ejercicios</title>
</head>

<body class=container>
    <h1>Ejercicio 2</h1>

    <?php
    /*
     * 1. Una función.
     * 2. Validar un email con filter_var.
     * 3. Recoger variable por get y validarla.
     * 4. Mostrar el resultado.
     */
    if (isset($_GET['correo'])){
        
    function correo(){
        $correo = $_GET['correo'];
        $validar = filter_var($correo, FILTER_VALIDATE_EMAIL);
        return $validar;
        
    }
}else {
    echo("Introduce el correo a validar");
    die();
}
if (correo()){
    echo ("El correo " . $_GET['correo'] . " es correcto");
}else {
    echo ("El correo " . $_GET['correo'] . " no es correcto");
}

?>


    
</body>

</html>
