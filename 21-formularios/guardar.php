

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Guardar</title>
</head>

<body>
    <h1 class="text-center">Recibido de formulario.html</h1>
    <div class="jumbotron">
        <h1 class="display-4"> <?php
                                if (isset($_POST['titulo']) && isset($_POST['descripcion'])) {
                                    echo $_POST['titulo'];
                                }
                                ?></h1>
        <p class="lead"> <?php
                            if (isset($_POST['titulo']) && isset($_POST['descripcion'])) {
                                echo $_POST['descripcion'];
                            }
                            ?>.</p>
        <hr class="my-6">
    </div>

    </div>
</body>

</html>