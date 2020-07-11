<?php

//no necesitamos requerir lso archivo de congiracion ni de conexion ya que es archivo es incodao en el indez
$numero_paginas = numero_paginas($blog_config['post_por_pagina'], $conexion);
/*echo "<h1>$numero_paginas</h1>";*/

?>


<section class="paginacion">
    <ul>
        <!--validamos que la pagina actual sea unoentonces desabilitamos el boton de ir hacia atras-->
        <?php if (pagina_actual() === 1): ?>
            <li class="disabled">&laquo;</li>
        <?php else: ?>
            <li><a href="index.php?p=<?php echo pagina_actual() - 1; ?>">&laquo;</a></li>
        <?php endif; ?>


        <!--Ciclo que generara tanto controles halla de aceurdo a la cantidad de pagina-->
        <?php for ($i = 1; $i <= $numero_paginas; $i++): ?>

            <?php if (pagina_actual() === $i): ?>
                <li class="active">
                    <?php echo $i; ?>
                </li>
            <?php else: ?>
                <li><a href="index.php?p=<?php echo $i; ?>"><?php echo $i; ?></a></li>
            <?php endif; ?>

        <?php endfor; ?>


<!--Condicional que validara si bloquea o no el boton de avanzar-->
        <?php if(pagina_actual() == $numero_paginas):?>
       <li class="disabled">&raquo;</li>
        <?php else:?>
            <li><a href="index.php?p=<?php echo pagina_actual() + 1 ;?>">&raquo;</a></li>
        <?php endif;?>

        <!--<li class="disabled">&laquo;</li>
        <li><a href="#">1</a></li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
        <li><a href="">&raquo;</a></li>-->
    </ul>
</section>