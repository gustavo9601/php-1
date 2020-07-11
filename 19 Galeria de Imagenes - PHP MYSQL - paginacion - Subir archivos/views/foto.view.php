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
        <!--Condicionak que valida que tenfa un titulo la iamgen y se lo dejara
        de lo contraio le asignara el nombre con el que se cargo la iamgen
        -->
        <h1 class="titulo">Foto : <?php if(!empty($foto['titulo'])) {
                echo $foto['titulo'];
            }else{
                echo $foto['imagen'];

            } ?></h1>
        <!--<h1 class="titulo">Foto: img (1).jpg</h1>-->
    </div>
</header>

<div class="contenedor">
    <div class="foto">
        <img src="fotos/<?php echo $foto['imagen'];  ?>" alt="" >
        <!--<img src="fotos/img (5).jpg" alt="" >-->
        <p class="texto"><?php  echo $foto['texto'];  ?></p>
        <a href="index.php" class="regresar"><i class="fa fa-long-arrow-left"></i> Regresar</a>
    </div>
</div>

<!--Footer-->
<footer>
    <p class="copyright">Galeria creada por Ingeniero Gustav Marquez</p>
</footer>

</body>
</html>
