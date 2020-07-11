<?php

$errores = ''; // varaible que alamcenara los errores
$enviado =  false;

//Validando si se envio el formulario, preguntando por el NAME DEL INPUT SUBMIT
if (isset($_POST['submit'])) {
    // capturando el valor de las varaibles
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $mensaje = $_POST['mensaje'];

    // Si no es vaica la varaible
    if (!empty($nombre)) {
        $nombre = trim($nombre); // envita los espacios
        $nombre = filter_var($nombre, FILTER_SANITIZE_STRING);
    } else {
        $errores .= 'Por favor ingresa un Nombre <br>';
    }

    // validacion correo
    if (!empty($correo)) {
        $correo = trim($correo); // envita los espacios
        $correo = filter_var($correo, FILTER_SANITIZE_EMAIL);
        // Vlidamos si no pasa el filtro de correo
        if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
            $errores .= 'Ingrese un Correo valido <br>';
        }
    } else {
        $errores .= 'Por favor ingresa un Correo <br>';
    }

    // validacion mensaje
    if (!empty($mensaje)) {
        $mensaje = htmlspecialchars( $mensaje ); // limpio l ainjeccion de html
        $mensaje = trim($mensaje); // envita los espacios
        $mensaje = filter_var($mensaje, FILTER_SANITIZE_STRING);
    } else {
        $errores .= 'Por favor ingresa un Mnesaje <br>';
    }


    /*Comdiconal a preguntar si hay errores -> varaible llena*/
    if(!$errores){ // pregunto si no hay errores
        $enviar_a = 'tavo9601@gmail.com';
        $asunto = 'Correo enviado desde mi Pagina.com';
        $mensaje_preparado = "DE: {$nombre} \n";
        $mensaje_preparado .= "CORREO: {$correo} \n";
        $mensaje_preparado .= "MENSAJE: {$mensaje}";

        // Funcion mail que permite un mnesaje al correo ***************
        // para metros (destinatario, asunto, mensaje));
        // mail($enviar_a, $asunto, $mensaje_preparado);


        // Pasamos la varaible global a true para que se muestr ela alerta de suscces
    $enviado = true;

    }

}


// importando el archivo de vista
require_once 'index.view.php';

?>
