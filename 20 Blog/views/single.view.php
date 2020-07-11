<!--Hedaer-->
<?php require_once 'header.php'; ?>

<div class="contenedor">
    <div class="post">
        <article>
            <h2 class="titulo"> <?php echo $post['titulo']; ?></h2>
            <p class="fecha"><?php echo  fecha($post['fecha']) ; ?></p>
            <div class="thumb">
                <img src="<?php echo RUTA; ?>/imagenes/<?php echo $post['thumb']; ?>" alt="">
            </div>
            <!--nl2br -> funcion que respeta espacios, cuando encuentra un espacion le agrega un <Br>-->
            <p class="extracto"><?php echo nl2br($post['texto']); ?></p>
        </article>
    </div>
</div>


<!--Footer-->
<?php require_once 'footer.php'; ?>