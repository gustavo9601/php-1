

<?php

//improtando el archivo de confiuracion
require_once 'admin/config.php';
//importando las funciones
require_once 'functions.php';


$conexion = conexion($db_config);
//variable que captura el id pasado por GET, pero primero incova a la funcion id_Artiuclo
// que casterara y limpisara lo que se pase por URl
$id_articulo = id_articulo( $_GET['id'] );

//validamos que halla conexion de lo contrario se redireccionR
if( !$conexion ){
    header('Location: error.php');
}

//conciiconal que valida si el id pasado po la URL es vacio o no es correcto
if( empty($id_articulo) ){
    header('Location: index.php');
}

//invocando a la funcion que devuelve la informacion del articulo pasando los paramentros
$post =  obtener_post_id($conexion , $id_articulo);
//si no hay post lo redigimos la index.php
if(!$post){
    header('Location: index.php');
}
//imprimos la informacion del post que nos devuelvoe la vairaible $post
/*echo '<pre>';
print_r($post);*/

//como solo nos devuelve un resgitros le incidamos que empieze desde la posicion 0 al post
// para que al momento de traer acceda a la siguietne ruta ['0']['titulo'];
$post = $post['0'];


//importnado la vista de index dle blog
require_once 'views/single.view.php';

?>

