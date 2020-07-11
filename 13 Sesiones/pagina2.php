<?php
/*
  * Sesion -> variable q vamos a utilizar en diferenctes paginas
  *
  * */


session_start();  // Hay que agregarlo en todas la pginas donde se usen sesiones

// Pregunto si se inicio o si existe una secion
if($_SESSION){
    // Guardo en una varaible la sesion
    $nombre = $_SESSION['nombre'];
    echo "<h1> Hola, $nombre  </h1>";
}else{
    echo "No has iniciado sesion";
}

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Pagina2</title>
</head>
<body>

<a href="cerrar.php">Cerrar la secion</a>
</body>
</html>
