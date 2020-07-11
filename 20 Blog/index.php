<?php

//improtando el archivo de confiuracion
require_once 'admin/config.php';
//importando las funciones
require_once 'functions.php';


//cONEXION A LA BD para empezar a traer los articulos
$conexion = conexion($db_config);

//condicional que valida que si devuelve false la conexion redireccione al archivo de rror
if(!$conexion){
   header('Location: error.php');
}

//invocando a la funcion de obtener post pasando los parametros
$posts = obtener_post($blog_config['post_por_pagina'] , $conexion);


//condicional que valida si se devolieron consulta en el post, de lo contrario lo redireccionara a eror
if(!$posts){
    header('Location: error.php');
}
//mostrando en un array el psot
/*echo '<pre>';
print_r($post);*/

//llamando a la funcion de pagina actual para validar en que pagina estamos
/*echo pagina_actual();*/


//importnado la vista de index dle blog
require_once 'views/index.view.php';








?>