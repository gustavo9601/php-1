<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <style>
        .error{
            display: inline-block;
            color: red;
            font-size:  25px;
            background-color: #333;
        }
    </style>
    <title>Document</title>
</head>
<body>

<?php


$errores = ''; // definimos una variable que almacenara en texto los errores

// Validamos si se envio algo mediante la funcion $_POST
if (isset($_POST['submit-formulario'])) {
    // Guardamos en variables la informacion eviarda por el formalrio
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $email = $_POST['correo'];


    // Si la varaible nombre no esta vacia, vamos a validarla
    if (!empty($nombre)) {
        $nombre = trim($nombre); //trim quita los espacios en blanco final - inicio
        $nombre = htmlspecialchars($nombre); // convierte caracteres espciales a texto
        $nombre = stripslashes($nombre);  // quita del nombre las / slash
        echo "Tu nombre es =  {$nombre} <br/>";
    }else{
        $errores .= 'Por favor agrega un Nombre <br>'; // .=  asigano lo que ya contenga la variable + lo siguiente
    }

    // forma de validacion 2
    if (!empty($apellido)) {

        // guardamos en la misma variable, los datos sanetiazadosç
        //pasamos la variable, luego el filtro de santizacion
        $apellido = filter_var( $apellido, FILTER_SANITIZE_STRING );
        echo 'Tu apellido es ' . $apellido . '<br/>';
    }else{
        $errores .= 'Agrega tu apellido <br>';
    }


    // validando el correo
    if( !empty($email) ){ // si no esta vacio el correo
        $email = filter_var( $email, FILTER_SANITIZE_EMAIL ); // santeizmaos el correo

        // Validando que el correo sea valido, negando si pasa el filtro de validacion
        if( !filter_var( $email, FILTER_VALIDATE_EMAIL ) ){
            $errores .= 'Ingresa un Correo valido <br/>';
        }else{
            echo 'Tu correo es ' . $email . '<br/>';

        }

    }else{
        $errores .= 'Agrega Un correo <br/>';
    }


}


?>


<!--
  $_SERVER['PHP_SELF'];  // devuelve la url del acrhivo actual

  -->
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <input type="text" name="nombre" placeholder="NOMBRE">
    <input type="text" name="apellido" placeholder="APELLDIO">
    <input type="email" name="correo" id="" placeholder="CORREO">


    <!-- De esta forma ejecutamos php y htmlal tiempo, y solo se ejecutara el html si se cumple la condicion -->
    <?php if( !empty($errores) ): // condifiocnal que valida si se lleno la variable $errores no esta vacia?>
        <div class="error">
            <?php echo $errores;  // imprimimos lo que contenga la varaible errores ?>
        </div>
    <?php  endif; ?>


    <input type="submit" value="Enviar consulta" name="submit-formulario">
</form>


</body>
</html>