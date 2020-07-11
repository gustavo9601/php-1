<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/estilos.css">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <title>Login</title>
</head>
<body>
<div class="contenedor">
    <div class="contenido">

        <!-- Se ejecutara en es mismo archivo y sanitizamos
        El nombre del formulario, lo utilizaremos para lanzar el psot

        -->
        <h1 class="titulo">Iniciar Sesion</h1>
        <hr class="border">
        <form method="post" class="formulario" name="login"
              action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
            <div class="form-group">
                <i class="icono izquierda fa fa-user"></i><input type="text" name="usuario" class="usuario"
                                                                 placeholder="Usuario">
            </div>
            <div class="form-group">
                <i class="icono izquierda fa fa-lock"></i><input type="password" name="password" class="password_btn"
                                                                 placeholder="Contraseña">
                <!-- la etiqueta <i> trae el icono y agregando onclick apuntando al nombre del formulario, hacemos que se ejecute el post como submit-->
                <i class="submit-btn fa fa-arrow-right" onclick="login.submit()"></i>
            </div>

            <!-- Condicional que validara si se inserto errorese en la varaible de ser asi mostrara el error-->
            <?php if (!empty($errores)): ?>
                <div class="error">
                    <ul>
                        <?php echo $errores; ?>
                    </ul>
                </div>
            <?php endif; ?>
        </form>


        <p class="texto-resgistrate">
            ¿ Aun no tienes cuenta?
            <a href="registrate.php">Registrate Aqui</a>
        </p>

    </div>

</div>


<footer>
    <p>Desarrollado por ingeniero Gustavo Marquez</p>
</footer>
</body>
</html>