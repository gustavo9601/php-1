<?php
//improtando el archivo de confiuracion
require_once 'admin/config.php';
//importando las funciones
require_once 'functions.php';

$conexion = conexion($db_config);

if (!$conexion) {
    header('Location: error.php');
}

//VALIDANDO que se hallaenviado el fomulario por get, y si lo que ese envia en el cambpo busqueda no sea vacio
if ($_SERVER['REQUEST_METHOD'] == 'GET' && !empty($_GET['busqueda'])) {
    $busqueda = $_GET['busqueda'];
//ejecutamos la funcion de limpiar lo que el suaurio escriba
    $busqueda = limpiarDatos($busqueda);

    //creamo sel query y lo preparamos
    $statement = $conexion->prepare(
        "SELECT * FROM articulos WHERE titulo LIKE :busqueda OR texto LIKE :busqueda"
    );
//ejecutamos el query
    $statement->execute([
        ':busqueda' => "%$busqueda%"
    ]);

    //guaradmos en una varible los reustlados
    $resultados = $statement->fetchAll();
/*
    echo '<pre>';
    print_r($resultados);*/

if( empty($resultados) ){
    $titulo = 'No se encontraron resultados con la busquerda = ' . $busqueda;
}else{
    $titulo = 'Resultados de la busqueda : ' .$busqueda;
}







}else{
    header('Location: index.php');
}

require_once 'views/busca.view.php';

?>