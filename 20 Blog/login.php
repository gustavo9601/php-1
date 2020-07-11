<?php session_start();  //inciiamos sesion ya que trabajermos con sesiones
require_once 'functions.php';
require_once 'admin/config.php';

//validamos si ya se inicio sesion se redireccionara al index

if(isset($_SESSION['admin'])){
    header('Location: ' .RUTA .'admin');
}


//CONCIONAL QUE VALIDA SI SE ENVIO EL PSOT
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];

    //usando la funcion y limpiando datos
    $usuario = limpiarDatos($usuario);
    $password = limpiarDatos($password);

//validacion de datos que concuerden con los del archivo config
    if ($usuario == $blog_admin['usuario'] && $password == $blog_admin['password']) {
        //creamos la sesion de nombre admin, para el usuario
        $_SESSION['admin'] = $blog_admin['usuario'];
//redireccionamos al usuario al archivo de crear lspsot
        header('Location: ' . RUTA . 'admin');
    }
}


require_once 'views/login.view.php';


?>

