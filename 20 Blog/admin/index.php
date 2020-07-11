<?php session_start();
//Archivo index del ADMIN


require_once 'config.php';
require_once '../functions.php';


$conexion = conexion($db_config);

//llamamos a la ufncuon que si no existe la session se reidercciona al index
 comprobarSession();


if( !$conexion ){
    header('Location: ../error.php');
}


$posts = obtener_post($blog_config['post_por_pagina'], $conexion);



//Comprobacion de sesion


require_once '../views/admin_index.view.php';

?>