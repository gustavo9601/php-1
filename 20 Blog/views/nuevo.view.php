<?php
require_once 'header.php';
?>


<div class="contenedor">
    <div class="post">
        <article>
            <!--En la url vamos a redireccionar a single.php pero para sando como id el de cada imagen paa que cuando
            el singe.php reciba el $_GET['p'] sepa que infomrcion debe hacer a la bd para traer los datos exactos-->
            <h2 class="titulo">Nuevo Articulo</h2>

            <!---
            enctype="multipart/form-data"  -> perimite subir archvos
            -->
            <form method="post" class="formuario" enctype="multipart/form-data"
                  action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">

                <input class="formulario" type="text" name="titulo" placeholder="Titulo del Artiuclo">
                <input class="formulario" type="text" name="extracto" placeholder="Extracto del Articulo">
                <textarea class="miTextarea" name="texto" id="" placeholder="Texto del Articulo"></textarea>
                <input type="file" name="thumb" id="">
                <input type="submit" class="btn-formulario btn" value="Crear Articulo">

            </form>

        </article>
    </div>
</div>


<?php
require_once 'footer.php';
?>




