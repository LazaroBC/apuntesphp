<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Subidas</title>
</head>

<body class=container>
    <h1>Subir Archivos al servidor</h1>
    <hr>
    <form action="upload.php" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <div class="custom-file">
                <input type="file" name="archivo" class="custom-file-input" id="customFile">
                <label class="custom-file-label" for="customFile">Elige Archivo</label>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Subir Archivo</button>
    </form>
   
    <h1>Listado imagenes</h1>

    <?php
    $gestor = opendir('./imagenes');
    if ($gestor) {
        while(($image = readdir($gestor)) !== false){
            if($image != '.' && $image != '..'){
                echo "<img src='imagenes/$image width='200px'><br>";
                var_dump($image);
            }
        }
    }


    ?>
</body>

</html>