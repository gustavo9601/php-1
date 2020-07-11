<?php

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <title>Galeria</title>
</head>
<body>
<header>
    <div class="contenedor">
        <h1 class="titulo">Mi Galeria en PHP y MYSQL</h1>
    </div>
</header>

<!--Seccion de fotos-->
<section class="fotos">
    <div class="contenedor">

        <!--Traeremos las iamgenes dinamicaqmntedesde la BD-->
        <?php foreach ($fotos as $foto): ?>
            <div class="thumb">
                <a href="foto.php?id= <?php echo $foto['id']; ?>  ">
                    <img src="fotos/<?php echo $foto['imagen'] ?>" class="foto_miniatura" alt="">
                </a>
            </div>

        <?php endforeach; ?>


        <!--
        <div class="thumb">
            <a href="">
                <img src="fotos/img (2).jpg" class="foto_miniatura" alt="">
            </a>
        </div>
        <div class="thumb">
            <a href="">
                <img src="fotos/img (3).jpg" class="foto_miniatura" alt="">
            </a>
        </div>
        <div class="thumb">
            <a href="">
                <img src="fotos/img (4).jpg" class="foto_miniatura" alt="">
            </a>
        </div>
        <div class="thumb">
            <a href="">
                <img src="fotos/img (3).jpg" class="foto_miniatura" alt="">
            </a>
        </div>
        <div class="thumb">
            <a href="">
                <img src="fotos/img (4).jpg" class="foto_miniatura" alt="">
            </a>
        </div>-->

        
        
        <div class="contenedor_subir">
            <h1 class="subir_imagen"><a href="subir.php">Subir Imagen</a></h1>
        </div>

        <!--Paginacion--->
        <div class="paginacion">
            <!--Condcicional que valida q la pagina actual sea mayor a 1 de lo contrario no podra ir asia atras-->
            <?php if( $pagina_Actual > 1 ): ?>
            <a href="index.php?p= <?php echo ($pagina_Actual - 1); ?> " class="izquierda"><i class="fa fa-long-arrow-left"></i> Pagina Anterior</a>
            <?php endif;?>
            <!--Condiconal que valida que si la pagina actual es iagual al total de pagnas no podra seguir adelante-->
            <?php if( $total_paginas != $pagina_Actual ): ?>
                <a href="index.php?p= <?php echo ($pagina_Actual  + 1); ?> " class="derecha">Pagina Siguiente  <i class="fa fa-long-arrow-right"></i></a>
            <?php endif;?>

            <!--
            <a href="#" class="izquierda"><i class="fa fa-long-arrow-left"></i> Pagina Anterior</a>
            <a href="#" class="derecha">Pagina Siguiente <i class="fa fa-long-arrow-right"></i></a>-->
        </div>
    </div>
</section>

<!--Footer-->
<footer>
    <p class="copyright">Galeria creada por Ingeniero Gustav Marquez</p>
</footer>

</body>
</html>
