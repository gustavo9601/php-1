<?php

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <title>Subir Foto</title>
</head>
<body>
<header>
    <div class="contenedor">
        <h1 class="titulo">Subir Foto</h1>
    </div>
</header>


<div class="contenedor">
    <!--enctype="multipart/form-data"   -> es necesario para que el formulario pueda subir archivs-->
    <form class="formulario" method="post" action="<?php  echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" enctype="multipart/form-data">
        <label for="foto">Selecciona tu Foto</label>
        <input type="file" id="foto" name="foto"><!--Tipo file
         -->
        <label for="titulo">Titulo de la foto</label>
        <input type="text" id="titulo" name="titulo">

        <label for="texto">Descripcion</label>
        <textarea name="texto" id="texto" placeholder="Ingresa una descipcion"></textarea>
        <?php if(isset($error)): ?>
            <p class="error"><?php echo $error;  ?></p>
        <?php endif;?>

        <input type="submit" class="submit" value="Subir Foto">
        <a href="index.php" class="submit">Ir a galeria</a>


    </form>
</div>

<!--Footer-->
<footer>
    <p class="copyright">Galeria creada por Ingeniero Gustav Marquez</p>
</footer>

</body>
</html>
