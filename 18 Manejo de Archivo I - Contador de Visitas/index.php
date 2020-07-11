<?php

function contar_usuario(){
    $archivo = 'contador.txt';

    if(file_exists($archivo)){ //validamos que exita el archivo
        $contenido = file_get_contents($archivo); //capturamos el valor del archivo en una variable

        $contenido = $contenido + 1; //vamos a incrementar en uno el valor que ya tenga el archivo, y a que se ejecutara cada ves que se cargue la pagina
        file_put_contents($archivo , $contenido); //vamos a ir remmplazando el valor del archivo y se ira sumando

        return $contenido;

    }else{
        //file_punt_contents, tambien sirve para crear el archivo y le escribmo 1
        file_put_contents($archivo , 1);
        return 1;
    }

}


// contar_usuario(); //invocando la funcion

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contador de visias</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
<h1>Contador de visitas</h1>
<div class="visitantes">
    <p class="numero">
        <?php  echo contar_usuario(); // invocamos la funcion y esta retornara el incremeto de visitas  ?>
    </p>
    <p class="texto">Visitas</p>
</div>
</body>
</html>
