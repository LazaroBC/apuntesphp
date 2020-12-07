<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Ficheros</title>
</head>

<body class=container>
    <h1>Ficheros</h1>
    <?php
    // Abrir archivo
    $abrir_archivo = fopen("texto.txt", "r+");

    // Leer archivo
    while (!feof($abrir_archivo)) {
        $contenido = fgets($abrir_archivo);
        echo $contenido . "<br>";
    }
    $contenido = fgets($abrir_archivo);
    echo $contenido;

    // Escribir en un archivo
    // fwrite($abrir_archivo, "Soy un texto metido desde PHP");
    // Cerrar archivo
    fclose($abrir_archivo);

    // Copiar un fichero
    copy('texto.txt', 'textoold.txt') or die ("Error al copiar");
    
    // Renombrar fichero
    // rename('texto.txt', 'text.txt');

    // Eliminar un fichero
    //unlink('textoold.txt') or die ('Error al borrar');

    if (file_exists('textoold.txt')){
        echo 'El archivo existe';
    }else {
        echo 'El archivo no existe';
    }
    ?>
</body>

</html>