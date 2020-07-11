<?php

//Conexion con la bd
require_once 'funciones.php';
$conexion = conexion('galeria','root','');
if( !$conexion ){
    die();
}

//varaible que valida si se envia por get el id le asiganara ese numero como entero de lo contario sera false
$id = isset($_GET['id']) ? (int)$_GET['id'] : false;

//condicional que valida q si dio false , redireccione al index
if( !$id ){
    header('Location: index.php');
}
//creamos el query
$query = "SELECT * FROM fotos WHERE id = :id";
//preparaamo sla conexion
$statement = $conexion->prepare( $query );
//ejecutamos la conexion
$statement->execute([
    ':id' => $id
]);

$foto = $statement->fetch();  //guradamos en una variabl eel resgistro devuelto

//condicional que valida que si el usuairo pasa por paraemtro una foto que no existe es decir :
// ?id=100000 -> lo redireccione al index
if( !$foto ){
    header('Location: index.php');
}



require_once 'views/foto.view.php';
?>