<?php


// $_SERVER['REQUEST_METHOD'] -> devuelve el tipo de peticion que se realizo GET O POST

if( $_SERVER['REQUEST_METHOD'] == 'GET' ){
    echo 'Se enviaron por GET' . '<br/>';
}else{
    echo 'Se enviaron por POST'.'<br/>';
}


// Segunda Forma, donde se valida por submit el name del input
// y de esta forma se puede diferenciar el envio de informacion entre varios formalarios
if ( isset ($_POST['submit-formulario']) ) {
    echo 'Se enviaron correctamente por POST'.'<br/>';
}else{
    echo ' Se enviaron por GET'.'<br/>';
}


?>