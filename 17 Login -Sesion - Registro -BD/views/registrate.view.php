<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/estilos.css">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <title>Registrate</title>
</head>
<body>
<div class="contenedor">
    <h1 class="titulo">Registrate</h1>
    <div class="contenido">
        <hr class="border">
        <!-- Se ejecutara en es mismo archivo y sanitizamos
        El nombre del formulario, lo utilizaremos para lanzar el psot
        -->
        <form method="post" class="formulario" name="login"  action="<?php  echo htmlspecialchars($_SERVER['PHP_SELF']) ;  ?>">
            <div class="form-group">
                <i class="icono izquierda fa fa-user"></i><input type="text" name="usuario" class="usuario" placeholder="Usuario">
            </div>
            <div class="form-group">
                <i class="icono izquierda fa fa-lock"></i><input type="password" name="password" class="password" placeholder="Contraseña">
            </div>
            <div class="form-group">
                <i class="icono izquierda fa fa-lock"></i><input type="password" name="password2" class="password_btn" placeholder="Repetir Contraseña">
                <!-- la etiqueta <i> trae el icono y agregando onclick apuntando al nombre del formulario, hacemos que se ejecute el post como submit-->
                <i class="submit-btn fa fa-arrow-right" onclick="login.submit()"></i>
            </div>

            <!-- Si hay errores los mostraremos al validar que no este vacia-->
            <?php  if( !empty($errores) ): ?>
                <div class="error">
                    <ul>
                        <?php echo $errores;  ?>

                    </ul>
                </div>
            <?php endif; ?>


        </form>


        <p class="texto-resgistrate">
            ¿ Ya tienes cuenta?
            <a href="login.php">Iniciar Sesion</a>
        </p>

    </div>
</div>

<footer>
    <p>Desarrollado por ingeniero Gustavo Marquez</p>
</footer>


</body>
</html>