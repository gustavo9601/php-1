<?php

/**
Forma 1
 *
 * FUNCION DEPRECADA NO FUNCIONA
 */

// creamos la varaible conexion, con or die() mamata la conexion de no ser correcta y se impide la nevgacion
$conexion = mysql_connect('127.0.0.1','root','') or die('No se pudo conectar ala BD');
mysql_select_db('tienda');
$query = mysql_query('SELECT * FROM artciles');


echo $query;

?>