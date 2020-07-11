<?php


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="estilos.css">

    <title>Formulario Contacto</title>
</head>
<body>

<div class="wrap">
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
        <!-- en value ponemos un condicional que valide si es falsa la varaible enviado, y se escribio al en input con isset, deje como valor lo que escribio   -->
        <input type="text" class="form-control form-style" name="nombre" placeholder="Nombre:" id="nombre" value="<?php if(!$enviado && isset($nombre)){echo $nombre;} ?>">
        <input type="text" class="form-control form-style" name="correo" placeholder="Correo:" id="correo" value="<?php if(!$enviado && isset($correo)){echo $correo;} ?>">
        <textarea name="mensaje" class="form-control form-style" id="mensaje" placeholder="Esribe tu mensaje" >
            <?php if(!$enviado && isset($mensaje)){echo $mensaje;} ?>

        </textarea>

        <!-- Mostrnado las alertas desde php-->
        <?php if (!empty($errores)): // condicional que preguntas si NO esta vacia la variable errores?>
            <div class="alert error">
                <?php echo $errores; // mostramos los errores ?>
            </div>
        <?php elseif ($enviado): ?>
            <div class="alert success">
                <p>Enviado correctamente</p>
            </div>
        <?php endif; ?>


        <!--
        MENSAJES DE ALERTA QUE SE MOSTRARA DESDE PHP
                <div class="alert error">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad adipisci architecto atque distinctio ipsam qui sapiente, sunt voluptates. Aliquam est ipsam, magni odio quidem reiciendis voluptas! Fuga omnis sit voluptatibus?
                </div>
        
                <div class="alert success">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad adipisci architecto atque distinctio ipsam qui sapiente, sunt voluptates. Aliquam est ipsam, magni odio quidem reiciendis voluptas! Fuga omnis sit voluptatibus?
                </div>
        -->
        <input type="submit" value="Enviar Correo !" name="submit" class="btn btn-primary">

    </form>


</div>


</body>
</html>