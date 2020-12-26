<?php
// Conectar a la base de datos

$conexion = mysqli_connect('localhost','root','','php-mysql');

// Comprobar conexion
if (mysqli_connect_errno()) {
    echo "La concexión a la base de datos ha fallado: " . mysqli_connect_error();
} else {
    echo "Conectado";
}
echo '<br>';
// Consulta para cofigurar la codificación de caracteres

mysqli_query($conexion,"SET NAMES 'utf8'");

// Consulta SELECT desde PHP
$query = mysqli_query($conexion, "SELECT * FROM notas");

while ($nota = mysqli_fetch_assoc($query)) {
    var_dump($nota);
    echo '<h3>' . $nota['titulo']. '</h3>';
    echo $nota['descripcion'] . '<br/>';
    echo $nota['color'] . '<br/>';
}

// Insertar datos
$sql =  "INSERT INTO notas VALUES(null, 'Otra nota', 'Esto es otra nota de PHP', 'blue')";
$insert = mysqli_query($conexion, $sql);
if ($insert){
    echo "Datos insertados correctamente";
}else {
    echo "Error: " . mysqli_error($conexion);
}

?>