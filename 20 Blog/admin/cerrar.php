<?php session_start();

//destruimos la sesion
session_destroy();

$_SESSION = array(); //setemoas a nulo el valor de la variable por seguridad

header('Location: ../' );


?>