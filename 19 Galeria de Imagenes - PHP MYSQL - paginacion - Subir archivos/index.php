<?php
/*
 * Importando el archivo de funcione sy generamos conexion ala BD
 * */
require_once 'funciones.php';

$fotos_por_pagina = 4; //varaible que delimitara la cantidad de imagenes por pagina
//variable de pagina actual -> valida que conetanga al el $_GET['p] de tenerlo lo asigana a la variable
//de lo contrario le asiganara 1, y los tomato la parte entera de loq ue se pase por el URl
$pagina_Actual = (isset($_GET['p']) ? (int)$_GET['p'] : 1 );
//varaible encargada de traer la canidad de imagenes o nombre de eimagenes exactos, si no es mayor a 1 la pag traemos desde 0
$inicio = ($pagina_Actual > 1)  ? $pagina_Actual * $fotos_por_pagina  - $fotos_por_pagina : 0 ;


$conexion = conexion('galeria' , 'root' , ''); //generamos la coenxion

//si no existe la conexion matamos la pagina
if( !$conexion ){
    die();
}


//**  treaeremos el nombre de las iamgenes desde la BD */***///
//SQL_CALC_FUND_ROWS -> deveulve el numero de filas
$sql2 = "SELECT  SQL_CALC_FOUND_ROWS * FROM fotos LIMIT $inicio, $fotos_por_pagina"; //query que traera todos las filas de acuerdo a limit
//preparando el query
$statement = $conexion->prepare( $sql2 );
//ejecutando el query
$statement->execute();
//variabe donde guardameros los resutlado, con fetAll() devuelvoera toda la consulta
$fotos = $statement->fetchAll();

if( !$fotos ){
    //si no devuevle nada la conuslta volveremeos a rediregir a este archivo
    header( 'Location: index.php' );
}
/*echo '<pre>';
print_r( $fotos );*/

//query q devoelvera el total de filas devueltas, gracias  ala funcion SQL_CALC_FOUND_ROWS
$sql3 = "SELECT FOUND_ROWS as total_filas";
$statement = $conexion->prepare( $sql3 );
$statement->execute();
//guardamos en una variable el resultado y accedemos en forma de array directamente
//a ['total_filas']
$total_post = $statement->fetch()['total_filas'];


//defnidmos en $total_paginas, la cantidad de paginas a generar
$total_paginas = ($total_post / $fotos_por_pagina);
$total_paginas = ceil( $total_paginas ); //usamos ceil para que aproxime siempre al mayor de acuerdo a la division anteior





require_once  'views/index.view.php';
?>