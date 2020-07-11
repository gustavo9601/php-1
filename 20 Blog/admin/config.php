<?php

/*Este sera destinado como confuracion deparametros
Como contrasea de admin , usuario etc.
*/


//constante
define('RUTA', 'http://localhost:85/PHP%20Falcon/20%20Blog/');

//arreglo de conexion a la bd
$db_config = array(
    'basedatos' => 'blog',
    'usuario' => 'root',
    'pass' => ''
);

//arreglo que define cuantos post se visualizaran por pagina
// ruta donde se alamcenaran las imagenes
$blog_config = array(
    'post_por_pagina' => '2',
    'carpeta_imagenes' => 'imagenes/'
);
//array que guarda el usuario administrador
$blog_admin = array(
    'usuario' => 'Gustavo',
    'password' => '123'
);

?>