<?php

/*
 * //funcion pathinfo -> devuelve valores o rutas o extenciones del archivo q pasamo por paraemtro, asi no exista el
 * archivo que pasamor por paraemtro
 *
 * */

echo  pathinfo('documento.txt' ,PATHINFO_BASENAME) . '<br>'; // PATHINFO_BASENAME -> devuelve el nombre.extencion del archivo
echo  pathinfo('c/carpeta/documento.txt' ,PATHINFO_DIRNAME) . '<br>'; // PATHINFO_DIRNAME -> deuvele el directorio padre del archivo, asi no exista el archvo
echo pathinfo('documento.txt' ,PATHINFO_EXTENSION) .'<br>'; //PATHINFO_eXTENCION -> devuele la extencion
echo pathinfo('documento.txt' ,PATHINFO_FILENAME) .'<br>';  //PATINFO_FILENAME -> devuelve solo el nombre del archivo


/*
 *funcion glob -> busca en los directorios, mediante un patron que pasemos por parametro, y los devuelve en un ARRAy
 *
 * */

$resultadosArray = glob('*.php'); // '*.php' -> devolvera todos los archivo terminados en extencion .php
echo '<h1>Todos los archivo con extencion .php</h1><pre>';
print_r( $resultadosArray );

$resultadosArray = glob('p*.txt'); //'p*.txt' ->devuelve todos los archivo q empiecen en p y su extencion sea .txt
echo '<h1>Todos los archivos que comience con la letra p y extencion .txt</h1><pre>';
print_r( $resultadosArray );

$resultadosArray = glob('*.{php,html,css,txt,png}', GLOB_BRACE); // '*.{extenciones}, GLOB_BRACE ' -> devuelve todos los archivo con las extenciones pasadas como parametros
echo '<h1>Todos los archivos de extenciones {php,html,css,txt,png} .txt</h1><pre>';
print_r( $resultadosArray );


$resultadosArray = glob('carpeta/*.php'); //'carpeta/*.php' -> busca en el directorio carpeta todas los archivos de extencion .php
echo '<h1>Todos los archivos de extencion .php en el directorio "carpeta"</h1><pre>';
print_r( $resultadosArray );

/*
 * basename('direcotio/archivo') -> devuevle solo el nombre del archivo , asi no exista el directorio
 * */
echo 'Nom archivo sin directorio = '. basename('carpeta1/carpeta2/ssss/archivo.php') . '<br>'; //devuelve el nombre del archivo con extencion
echo 'Nom archivo sin directorio y sin extencion =  '. basename('carpeta1/carpeta2/ssss/archivo.php' , '.php') . '<br>'; //devuelve el nombre del archivo con extencion,
                                                                                                                        // y le especificamos la extencion qu eno queremos mostrar



?>