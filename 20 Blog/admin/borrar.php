<?php session_start();

require_once 'config.php';
require_once '../functions.php';


//llamamos a funcion que validara si existe la session la dejara de lo contrario se redireccionara al index
comprobarSession();


//creando l aconexion
$conexion = conexion($db_config);

if (!$conexion) {
    header('Location: ../error.php');
}

//capturamos el id de la url
$id = limpiarDatos($_GET['id']);

//si no existe un id se redirigira
if(!$id){
header('Location: ' . RUTA . 'admin');
}

//preparamsp el query
$statement = $conexion->prepare(
  'DELETE FROM articulos 
WHERE id = :id'
);

//ejecutamo<s el query
$statement->execute([
   ':id' => $id
]);

//lo dirijimo a la misma ruta para que se pueda referescar
header('Location: ' . RUTA . 'admin');

?>