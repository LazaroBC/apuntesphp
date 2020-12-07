<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Formularios</title>
</head>

<body class=container>
    <h1>Formularios</h1>
    <form action="" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" class="form-control" autofocus="autofocus" maxlength="10" placeholder="Nombre">
        </div>
        <div class="form-group">
            <label for="apellido">Apellido</label>
            <input type="text" name="apellido" class="form-control" minlength="2" pattern="[A-Za-z ]+" required="required" placeholder="Apellido">
        </div>
        <div class="form-group">
            <label for="apellido">Boton</label>
            <input type="button" name="button" value="Boton" class="form-control">
        </div>
        <label for="sexo">Sexo</label>
        <div class="form-check">

            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
            <label class="form-check-label" for="defaultCheck1">
                Hombre
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="defaultCheck2">
            <label class="form-check-label" for="defaultCheck2">
                Mujer
            </label>

        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
    <form>
        <label for="color">Color:</label>
        <p><input type="color" name="color" /></p>
        <br>
        <label for="fecha">Fecha:</label>
        <p><input type="date" name="fecha" /></p>

        <label for="correo">Correo:</label>
        <p><input type="email" name="correo" /></p>

        <label for="archivo">Archivo:</label>
        <p><input type="file" name="archivo" multiple="multiple" /></p>

        <label for="numero">Número:</label>
        <p><input type="number" name="numero" /></p>

        <label for="pass">Contraseña:</label>
        <p><input type="password" name="pass" /></p>

        <label for="continente">Continente:</label>
        <p>
            América del sur<input type="radio" name="continente" value="América del sur" />
            Europa<input type="radio" name="continente" value="Europa" />
            Ásia<input type="radio" name="continente" value="Asia" />
        </p>

        <label for="url">Página WEB:</label>
        <p><input type="url" name="url" /></p>

        <textarea></textarea><br>

        <select name="peliculas">
            <option vaule="El cielo sobre brelín">El cielo sobre Berlín</option>
            <option value="2">Avatar</option>
            <option value="pelicula 3">Con faldas y a lo loco</option>
        </select>
        <br>

        <button type="submit" class="btn btn-primary">Enviar</button>


    </form>
    <?php


    ?>
</body>

</html>