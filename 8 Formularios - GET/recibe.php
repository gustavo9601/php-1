<?php

var_dump ($_GET);


$nombre = $_GET['nombre'];
$sexo = $_GET['sexo'];
$year = $_GET['year'];
$terminos = $_GET['terminos'];


if( !$_GET ){
    header( 'Location:formulario1.php' );
}

echo 'Hola  ' . $nombre . '<br/>';
echo 'Sexo  ' . $sexo . '<br/>';
echo 'Year  ' . $year . '<br/>';
echo 'Terminos  ' . $terminos . '<br/>';


?>