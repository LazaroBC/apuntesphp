<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="container">
        
        <?php
        // Constantes

        define('nombre', 'Lázaro Belloch Canet');
        define('telefono', '626789811');

        echo '<h1>' . nombre . '</h1>' . "----" . '<h3> ' . telefono .  '</h3>' . "<br>";

        // Constantes predefinidas

        echo "PHP_OS: " . PHP_OS . "<br>";
        echo "PHP_VERSION: " . PHP_VERSION . "<br>";
        echo "__LINE__: " . __LINE__  . "<br>";
        echo "__FILE__: " . __FILE__ . "<br>";
        function holaMundo()
        {
            echo "__FUNCTION__: " . __FUNCTION__ . "<br>";
        }

        holaMundo();


        ?>
    </div>

</body>

</html>