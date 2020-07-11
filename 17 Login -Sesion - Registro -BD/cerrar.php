<?php session_start(); //indicamos que trabajamos con sesion


//Destruimos la sesion
 session_destroy();

 $_SESSION = array();  //le indicamos que la sesion pasa a ser un array nulo

header('Location: login.php'); //redireccion a mi login

die();//mato la conexion sql
?>