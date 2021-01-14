<?php
// Conexión a la base de datos
$servidor = 'localhost';
$usuario = 'root';
$password = '';
$baseDeDatos = 'blog_master';
$db = mysqli_connect($servidor, $usuario, $password,$baseDeDatos);
mysqli_query($db, 'SET NAMES "utf8"');

// Iniciar sesión
if(!isset($_SESSION)){
    session_start();
    }
?>