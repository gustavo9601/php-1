<?php
/*
  * Archivo que cerrar la secion
  *
  *
  * */

session_start();// Indicamos que trabajamos con la sescion
// La secion tambien se destruira cuando se cierre el navegador
session_destroy(); // Destruimos la sesion

echo '<h1>Se cerro correctamente la sesion</h1>'
?>