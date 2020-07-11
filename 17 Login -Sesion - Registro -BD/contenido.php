<?php session_start(); //indicando que trabajo con sesion
// archivo contenido.php -> logica de la app validara que exista una sesion valida


//validamos que se halla creado la sesion USUARIO, de lo contrario se redirecccionara a login.php
if( isset($_SESSION['usuario']) ){

//importando el archivo
    require_once 'views/contenido.view.php';

}else{
    header('Location: login.php');

}




?>