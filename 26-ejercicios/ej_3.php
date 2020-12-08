<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Ejercicios</title>
</head>

<body class=container><?php
                        /*
     * Hacer una interfaz de usuario (formulario) con dos inputs y 4 botones
     * sumar, restar, multiplicar y dividir
     */

                        session_start();


                        ?>
    <h1>Ejercicio 3</h1>
    <hr>
    <h1 class="text-center">Calculadora</h1>
    <form action="calcular.php" method="GET">
        <div class="form-group">
            <p class="text-center" for="operador1">Operador 1</p>
            <input type="text" class="form-control" name="operador1">
        </div>
        <div class="form-group">
            <p class="text-center" for="operador2">Operador 2</p>
            <input type="text" class="form-control" name="operador2">
        </div>
        <div class="text-center">
            <button type="submit" name="sumar" class="btn btn-primary">Sumar</button>
            <button type="submit" name="restar" class="btn btn-primary">Restar</button>
            <button type="submit" name="multiplicar" class="btn btn-primary">Multiplicar</button>
            <button type="submit" name="dividir" class="btn btn-primary">Dividir</button>
        </div>
    </form>

    <hr>
    <h1 class="text-center">
        <?php
        echo "Resultado de " . $_SESSION['operacion'];
        ?>
    </h1>
    <h1 class="text-center"><?= $_SESSION['calculo'] ?></h1>




</body>

</html>