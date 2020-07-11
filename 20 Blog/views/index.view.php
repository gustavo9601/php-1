<!--Hedaer-->
<?php require_once 'header.php'; ?>

<div class="contenedor">

    <!--Treamos con un foreach tantos arculos como hallan devuelto en la variable POSTS-->
    <?php foreach ($posts as $post): ?>
        <div class="post">
            <article>
                <!--En la url vamos a redireccionar a single.php pero para sando como id el de cada imagen paa que cuando
                el singe.php reciba el $_GET['p'] sepa que infomrcion debe hacer a la bd para traer los datos exactos-->
                <h2 class="titulo"><a href="single.php?id=<?php echo $post['id']; ?>"> <?php echo $post['titulo']; ?></a></h2>
                <p class="fecha"><?php echo fecha($post['fecha']) ; ?></p>
                <div class="thumb">
                    <a href="single.php?id=<?php echo $post['id']; ?>">
                        <img src="<?php echo RUTA; ?>/imagenes/<?php echo $post['thumb']; ?>" alt="">
                    </a>
                </div>
                <p class="extracto"><?php echo $post['extracto']; ?></p>
                <a href="single.php?id=<?php echo $post['id']; ?>" class="continuar">Continuar Leyendo</a>
            </article>
        </div>
    <?php endforeach; ?>

    <!--  <div class="post">
        <article>
            <h2 class="titulo"><a href="#"> Titulo del articulo</a></h2>
            <p class="fecha">1 de Enero de 2017</p>
            <div class="thumb">
                <a href="#">
                    <img src="<?php /*echo RUTA; */ ?>/imagenes/2.jpg" alt="">
                </a>
            </div>
            <p class="extracto">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat, quis?</p>
            <a href="#" class="continuar">Continuar Leyendo</a>
        </article>
    </div>-->
    <!--Paginacion-->
    <?php require_once 'paginacion.php'; ?>
</div>


<!--Footer-->
<?php require_once 'footer.php'; ?>