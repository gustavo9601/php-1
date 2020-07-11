<?php


$existe_Archivo = file_exists('documento.txt');  //funcion que devuleve si en el directoio existe el nombre que pasamos por paraemntro
// true o false segun sea, y lo guardamos en una variable

if ($existe_Archivo) {
    echo 'El archiv Existe y su contenido es = ';

    $contenido_archivo = file_get_contents('documento.txt'); //funcion que devuleve el contenido del archivo
    echo $contenido_archivo;


    file_put_contents('documento.txt', "Hola Ingeniero \n", FILE_APPEND); /*
    Funcion que permite escribir informacion sobre el archivo , especificando por paraemntro
    ( 'nombreDocumento' , 'Texo a escribir' , 'FILE_APPEND -> indica que no borar el contenido el archivo sino inserara de mas la informacion en el archivo )
 */

    $contenido_archivo = file_get_contents('documento.txt'); //vovlemos a obetener lo que conteine el archivo par despues mostrarlo
    echo 'Despues de escribir en el documento el resultado es = ' . $contenido_archivo;


    //Vamos a vaciar el contenido del archivo
    file_put_contents('documento.txt', ''); //sobreescirbimos el archivo ya qu elo llenaremos con un arreglo for

    for ($i = 0; $i <= 10; $i++) {
        //Recorresmo el ciclo y le insrtasmo los numero del 1 al 10 con \n genera el salto de linea
        file_put_contents('documento.txt', "Valor = $i \n", FILE_APPEND);
    }

    //Volvemos a captuar el archivo y lo mostramos
    $contenido_archivo = file_get_contents('documento.txt');
    echo $contenido_archivo;


    $contenido_Array = file('documento.txt'); //funcion file que permite o deuvelev un arreglo con el contenido del archivo
    echo '<h1>Mostramos el coontenido del archivo como Array</h1><pre>'; //mostramos el arcvhio y se visualiza com oarray
    print_r ($contenido_Array);


} else {
    echo 'El archivo no existe en el directorio actual Pero se creara en el instante';

}


?>