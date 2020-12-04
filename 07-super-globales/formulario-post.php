<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Formulario PHP</title>
</head>

<body class="container">
    <h1>Formulario POST en PHP</h1>
    <form method="POST" action="recibir-post.php">
        <p>

            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" />
        </p>
        <p>
            <label for="apellidos">Apellidos</label>
            <input type="text" name="apellidos" />
        </p>
        <p>
            <input type="submit" value="Enviar datos" />
        </p>

    </form>
</body>

</html>