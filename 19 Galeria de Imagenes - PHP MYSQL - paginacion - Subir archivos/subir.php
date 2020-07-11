<?php

require_once 'funciones.php'; //importando el archivo de funciones

/*Cramos la conexion a la BD usando la funcion del archivo funciones*/
$conexion = conexion('galeria', 'root', ''); //si todo funciona bien alamcenara la conexion, de lo ontrario false
//Condicional que valida si huvo conexion o NO
if (!$conexion) {
    die(); //matamos la  pagina de no existi conexion
}

//Condicional que valida si se ejecuto el post del fomulario, y si subimos archuvo en el archuvo subir.php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_FILES)) {
//La variable $_FILES -> devuelve un arreglo con las caracteristicas del archivo que subimos
    /*echo '<pre>';
    print_r($_FILES);*/

    //con el @ indicamo sque no muestre el error de tipo NOTICE
    $check = @getimagesize($_FILES['foto']['tmp_name']);
// guardo en una variable datos del tamaño de la imagen pasando por parametro:
//foto-> indice o name del input, tmp_name -> caracteristica propia de $_FILES
/*    echo '<pre>';
    print_r($check);*/

    //condicional que valida que check sea true, si no es porque se intento subir un tipo de archivo diferente a imagen
    if($check != false){
        $carpeta_destion = 'fotos/'; //variable que indicara el nombre de la carpeta donde se guardaran las img
        $archivo_subido = $carpeta_destion . $_FILES['foto']['name'];//concatenamos el nombre de carpeta, con el del archivo
        /*echo $archivo_subido;*/


        //Funcion que permittira almacenar en el serdiro
        //pasamos por parametro ( variable $_FILES apuntado al name del formulario )
        // y la ruta de la carpeta destino con el respectivo nombre y extencion
        move_uploaded_file($_FILES['foto']['tmp_name'],$archivo_subido);

        //***generamos el insert a la bd
        //sql
        $sql = 'INSERT INTO fotos (titulo,imagen,texto)
        VALUES (:titulo, :imagen, :texto)';
        //preparamos el query
        $satatement = $conexion->prepare($sql);
        //lo ejecutamos
        $satatement->execute([
            ':titulo' => $_POST['titulo'],
            ':imagen' => $_FILES['foto']['name'], //nombre del archivo
            ':texto' => $_POST['texto']
        ]);


        header('Location: index.php');

    }else{
        $error = 'El archivo no es una imagen o el archivo es muy pesado';
    }



}

require_once 'views/subir.view.php';

?>