<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Directorios</title>
</head>

<body class=container>
    <h1>Directorios</h1>
    <hr>
    <?php

    if(!is_dir('mi_carpeta')){
    mkdir('mi_carpeta', 0777) or die ('No se puede crear la carpeta');
    }else {
        echo 'Ya existe la carpeta mi_carpeta';
    }

    // rmdir('mi_carpeta');
    echo "<hr>";
    echo "Contenido de mi_carpeta<br>";
    if($gestor = opendir('./mi_carpeta')){
        while(false !== ($archivo = readdir($gestor))){
            if($archivo != "." && $archivo != ".."){
                echo $archivo . "<br>";
            }   
        }
    }
    ?>
</body>

</html>