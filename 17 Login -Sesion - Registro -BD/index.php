<?php
/*
 * Vamos a comprobar que exista una sesion de lo contrario
 * se redirigra a la pagina de inicio
 * */

session_start(); //Indicando e incicinado la sesion, en todas las paginas


if( isset( $_SESSION['usuario'] ) ){  //Si se inicio sesion y no es null
    header('Location: contenido.php'); // se redirigira al contenido
}else{
    header('Location: login.php'); // de lo contrario se redireccionara al fomrm de registro
}

?>