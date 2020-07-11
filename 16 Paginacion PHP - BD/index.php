<?php
/***********************************/
//CONEXION BD

try {

    $conexion = new PDO(
        'mysql:host=localhost;dbname=paginacion', // SGBD, HOST, DB
        'root', //USER
        '' //PASSW
    );


} catch (PDOException $e) {
    echo 'Error de Conexion PDO = ' . $e->getMessage();
    die(); //Se existe algun error mantara la conexion de la pagina
}


//Garudo en una varaible el valor de method get paginay le asigno la parte enterade Url, DE NO SER ASI SE DEOLVERA A LAPAGINA 1
$pagina = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1;
//variable que contendra el limite articulos a mostrar
$postPorPagina = 5;
// variable de inicio, que controlara aparti de que fila lanzara el query
$inicio = ($pagina > 1) ? ($pagina * $postPorPagina - $postPorPagina) : 0;


//----------------------------------------------------------------
//Query qu limita a 5, y trae de acuerdo a la posicion de la pagina
// SQL_CALC_FOUND_ROWS -> devuelve el numero de fulas total
$sql = "SELECT SQL_CALC_FOUND_ROWS * FROM tabla LIMIT $inicio, $postPorPagina";
//Preparando el query
$articulos = $conexion->prepare($sql);
//Ejecutando el query
$articulos->execute();
//Guardamos en la misma varaible lo que devueve la ejecucion en fomra de Array
$articulos = $articulos->fetchAll();

/*
echo '<pre>';
print_r( $articulos );
echo '</pre>';*/

//Condicional que valida si pasamos un numero que supera el limite de articulos
// Se redireccionada a la pagina principal
if (!$articulos) {
    header('Location: index.php');
}

//Guardamos en una variable un query que devolvera el total de filas que existe en la tabla
//Esto para saber cuantos botoenes de # de pagina se deben crear automaticamente
$totalArticulos = $conexion->query('SELECT FOUND_ROWS() as total');
// Sbreescirobo la variable y ejectuo el query devolvendo en aray un resultado
//como se devuelve un solo resitro especificamos el submonbre 'total'
$totalArticulos = $totalArticulos->fetch()['total'];
/*echo 'Toal articulso =' . $totalArticulos;*/

// guardamos en una varaible el numero paginas que se desiganran
//De acuerdo a la operacion totalFilas / numero de articulos a mostrar por pagina
$numeroPagina = ceil($totalArticulos / $postPorPagina); //ceil reondea al numero mayor
/*echo 'Numero de paginas = ' . $numeroPagina;*/





//Importnado el archivo
require_once 'index.view.php';


?>