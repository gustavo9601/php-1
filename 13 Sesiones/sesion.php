<?php
/**
Una secion es una varaible que gurada el inicio de sesion de un Login
 */

//Inicio la secion
session_start();

//1. Creamos nuestras sesiones
$_SESSION['nombre'] = 'Gstavo'; // Creamos una sesion y esta disponible en todas las paginas donde este session_Satrt()


?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sessiones</title>
</head>
<body>
<h1>Pagina de Inicio</h1>
<p></p>
<a href="pagina2.php">Ir a la pagina2</a>
</body>
</html>
