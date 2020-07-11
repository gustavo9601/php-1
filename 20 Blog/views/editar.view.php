<?php
require_once 'header.php';
?>


<div class="contenedor">
    <div class="post">
        <article>
            <!--En la url vamos a redireccionar a single.php pero para sando como id el de cada imagen paa que cuando
            el singe.php reciba el $_GET['p'] sepa que infomrcion debe hacer a la bd para traer los datos exactos-->
            <h2 class="titulo">Editar Articulo</h2>

            <!---
            enctype="multipart/form-data"  -> perimite subir archvos
            -->
            <form method="post" class="formuario" enctype="multipart/form-data"
                  action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
                <input type="hidden" name="id" value="<?php echo $post['id'];?>">
                <input class="formulario" type="text" name="titulo" placeholder="" value="<?php echo $post['titulo'];?>">
                <input class="formulario" type="text" name="extracto" placeholder="" value="<?php echo $post['extracto'];?>">
                <textarea class="miTextarea" name="texto" id="" placeholder="Texto del Articulo">
                    <?php echo $post['texto'];?>
                </textarea>
                <input type="file" name="thumb" id="thumb">
                <!--El input hidden no se muestra en pantañña solo sirve para guardar datos -->
                <input type="hidden" name="thumb-guardada" value="<?php echo $post['thumb'];?>">
                <input type="submit" class="btn-formulario btn" value="Modificar Artiuclo" >

            </form>

        </article>
    </div>
</div>


<?php
require_once 'footer.php';
?>




