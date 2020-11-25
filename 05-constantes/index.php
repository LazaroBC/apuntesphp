<?php
// Constantes

define('nombre', 'Lázaro');
define('telefono','626789811');

echo '<h1>' . nombre . '</h1>' . "----" . '<h3> '. telefono .  '</h3>' . "<br>";;

// Constantes predefinidas

echo "PHP_OS: " . PHP_OS . "<br>";
echo "PHP_VERSION: " . PHP_VERSION . "<br>";
echo "__LINE__: " . __LINE__  . "<br>";
echo "__FILE__: " . __FILE__ . "<br>";
function holaMundo(){
    echo "__FUNCTION__: " . __FUNCTION__ . "<br>";
}

holaMundo();




?>