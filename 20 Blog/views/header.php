<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="<?php echo RUTA; ?>css/estilos.css">
    <link rel="stylesheet" href="<?php echo RUTA; ?>css/font-awesome.min.css">
    <title>Blog</title>
</head>
<body>


<header>
    <div class="contenedor">
        <div class="logo izquierda">
            <p><a href="<?php echo RUTA;  ?>">Blog de Ingenieros</a></p>
        </div>

        <div class="derecha">
            <!--RUTA -> es una constante que indica la posicion del index , y la informacion se buscara en buscar.php-->
            <form name="busqueda" class="buscar" action="<?php echo RUTA; ?>/buscar.php" method="get">
                <input type="text" name="busqueda" placeholder="Buscar !">
                <button type="submit" class="icono fa fa-search"></button>
            </form>
            <nav class="menu">
                <ul>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="<?php echo RUTA; ?>login.php"><i class="fa fa-user-circle"></i></a></li>
                    <li><a href="#">Contacto <i class="fa fa-envelope"></i></a></li>
                </ul>
            </nav>
        </div>
    </div>
</header>