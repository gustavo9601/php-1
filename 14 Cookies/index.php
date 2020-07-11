<?php

/*
 * Una Cookie, es un archivo que almcancean un inicio de sesion par adespues guardarlo
 * */


// Creacion de cokkie, para este caso con solo abrir el archiv ose crea la cooki
/*
 * setcookie()  // funcion par creara la cookie
 * nombre de la cooki -> font-size
 * valor cokkie -> 30px
 * timepo -> time() ahora
 * 60 // segundos
 * 60 // minutos
 * 24 // horas
 * 30 // dias
 *directorio, donde se alamcenra //   / -> raiz
 * */

/*
 *
 * Para remover la cookie ponemos una fecha negativa
 * */
setcookie('font-size', '30px', time() + 60 + 60 * 24 * 30, '/');


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cookies</title>
</head>
<body>
<h1>Cookies Seteada</h1>
<a href="texto.php">Ir a el texto para visulaizar q la cookie este bin</a>
</body>
</html>
