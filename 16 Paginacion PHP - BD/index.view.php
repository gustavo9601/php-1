<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="estilos.css">
    <title>Paginacion</title>
</head>
<body>

<div class="contenedor">
    <h1>Articulos</h1>

    <section class="articulos">
        <ul>
            <!-- pgp embebido en html, con foreach--->
            <?php foreach ($articulos as $articulo): ?>
                <!--  traemos en forma de objeto, en li -> el id con s unombr ede articulo  -->
                <li><?php echo $articulo['id'] . ' .- ' . $articulo['articulo']; ?></li>
            <?php endforeach; ?>
        </ul>
    </section>

    <section class="paginacion">
        <ul>
<!-- Con un condiconal validamos en la pagina que estamos , para habilitar o descabilitar los controles segun sea-->
            <?php if ($pagina == 1): ?> <!-- Si esta en l apagina desabilitara el control de flecha-->
                <li class="disabled"> &laquo; </li>
                <?php else: ?> <!-- Si es diferente a 1 habilitara la flecha y pondra un <a> enalce en el control de flecha-->
                <!-- echo ($pagina -1) -> se valida la pagina en la que se encuentra y se retrasara - 1  -->
                <li ><a href="?pagina=<?php  echo ($pagina -1); ?>">&laquo; </a></li>
            <?php endif; ?>


            <?php
            // ciclo que agregara los controles hasta que sean iguales al numero de paginas definida en index.php
            // ademas agregara el numero de pagina a cada boton a redireccionar
            for ($i = 1; $i <= $numeroPagina ; $i++){
                //Condicional que pondra creara un elemento <li> con clase active, validando que la URL pagina se igual al numero de control
               if( $pagina == $i ){

                   echo '<li class="active" ><a  href="?pagina=' . $i . '">' . $i . '</a></li>';
               }else{
                   //Para los demas elemtnos se crearan sin la clase
                   echo '<li><a  href="?pagina=' . $i . '">' . $i . '</a></li>';
               }

            }

            ?>

            <!--- Validacion del control de siguiente-->
            <?php if ($pagina == $numeroPagina): ?> <!-- Si esta en la ultima apagina desabilitara el control de flecha-->
                <li class="disabled"> &raquo; </li>
            <?php else: ?> <!-- Si es diferente a al ultimo numeroPagina habilitara la flecha y pondra un <a> enalce en el control de flecha-->
                <!-- echo ($pagina -1) -> se valida la pagina en la que se encuentra y se retrasara - 1  -->
                <li ><a href="?pagina=<?php  echo ($pagina  + 1); ?>">&raquo; </a></li>
            <?php endif; ?>


        </ul>
    </section>


</div>
</body>
</html>