<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Validación</title>
</head>

<body class="container">
    <h1 class="text-center">Validar formularios en PHP</h1>
    <?php
        if (isset($_GET['error'])) {
            $error = $_GET['error'];
            if($error == 'nombre'){
                echo"<strong style='color:red'>Introduce el nombre correctamente</strong>";
            }
            if($error == 'apellidos'){
                echo"<strong style='color:red'>Introduce el apellido correctamente</strong>";
            }
            if($error == 'edad'){
                echo"<strong style='color:red'>Introduce la edad correctamente</strong>";
            }
            if($error == 'email'){
                echo"<strong style='color:red'>Email falso</strong>";
            }
            if($error == 'password'){
                echo"<strong style='color:red'>Necesitas más dígitos en tu contraseña</strong>";
            }
        }
    ?>

    <form action="procesar_formulario.php" method="POST">
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input class="form-control" type="text" name="nombre" required="required" patern="[a-zA-Z ]+/>
        </div>
        <div class="form-group">
            <label for="apellidos">Apellidos</label>
            <input class="form-control" type="text" name="apellidos" required="required" patern="[a-zA-Z ]+/>
        </div>
        <div class="form-group">
            <label for="edad">Edad</label>
            <input class="form-control" type="text" name="edad" required="required" patern="[0-9]+/>
        </div>
        <div class="form-group">
            <label for="email">eCorreo</label>
            <input class="form-control" type="email" name="email" required="required" />
        </div>
        <div class="form-group">
            <label for="pass">Contraseña</label>
            <input class="form-control" type="password" name="pass" required="required" minlength="5"/>
        </div>
        <div class="form-group">
            <input class="form-control" type="submit" value="Enviar" />
        </div>
    </form>
</body>

</html>