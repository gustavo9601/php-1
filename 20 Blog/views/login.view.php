<!--Hedaer-->
<?php require_once 'header.php'; ?>

<div class="contenedor">
<div class="post">
    <article>
        <h2 class="titulo">Iniciar Sesion</h2>
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
            <input class="formulario" type="text" name="usuario" placeholder="Usuario:">
            <input class="formulario" type="password" name="password" placeholder="Contraseña:">
            <input class="btn btn-formulario"type="submit" value="Iniciar Sesion">
        </form>
    </article>
</div>

</div>


<!--Footer-->
<?php require_once 'footer.php'; ?>