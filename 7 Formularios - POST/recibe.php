<?php

/*  Se recibiran los datos con el method POST */

var_dump($_POST);

// Valido que se hallan enviado valores en el formalrio
if (!$_POST) {

// Si no se enviaron valores en el formulario, se redirecionara al formualrio
    header('Location: formulario1.php');
};

// Guardo en varaibles lo que paso en el formulario+
// como se paso por post -> $_POST
// en [] le paso el name del input del formulario
$nombre = $_POST['nombre'];
$sexo = $_POST['sexo'];
$year = $_POST['year'];
$terminos = $_POST['terminos'];


echo 'Hola ' . $nombre . ' Eres de Sexo = ' . $sexo . '<br/>';


?>