<?php

/*Funcion de conexion a la BD*/

//le pasamos el array de config.php
function conexion($bd_config)
{
    try {

        $conexion = new PDO(
            'mysql:host=localhost;dbname=' . $bd_config['basedatos'],
            $bd_config['usuario'],
            $bd_config['pass']
        );
        //si se efectua la conexion, la retornamos
        return $conexion;
    } catch (PDOException $e) {
        //si es invalida la conexion retornamos false
        return false;
    }
}

/*Funcion de limpiar datos*/
function limpiarDatos($datos)
{
    //limpia los datos
    $datos = trim($datos); //trim() -> limpia los espacios en blanco
    $datos = stripslashes($datos); // quita las barras html
    $datos = htmlspecialchars($datos); //quita html
    $datos = filter_var($datos, FILTER_SANITIZE_STRING);
    //retornamos los datos limpiados
    return $datos;

}

//funcion que devolvera la pagina actual
function pagina_actual()
{

    /*
     * Retornaremrmos la pagina de existitr o estar setedad
     * de lo contraio devolveremos un 1 para indicar que estamos en la pagna 1
     *
     * */
    return isset($_GET['p']) ? (int)$_GET['p'] : 1;
}


//funcion que devolvera los post
function obtener_post($post_por_pagina, $conexion)
{
    /*
     * varaible inicio devovlera un numero desde donde empezara a traer el post
     * variable inicio que invocara a la funcion pagina_actual()
     * validara que sea mayor a 1 de ser asi ara el calculo para traer la cantidad y el post
     * de lo contrario emepzara a traer desde el 0
     * */
    $inicio = (pagina_actual() > 1) ? pagina_actual() * $post_por_pagina - $post_por_pagina : 0;


    //creamos una cariable con el query y la preparamos
    //SQL_CALC_FOUND_ROWS -> deuvele la cantidad de filas deuvletas
    //en el query especificamos el inico de fila y el final , como un offset
    $sentencia = $conexion->prepare(
        "SELECT SQL_CALC_FOUND_ROWS * FROM articulos LIMIT $inicio, $post_por_pagina");

    //ejecutamos
    $sentencia->execute();

    //retornamo sla consulta
    return $sentencia->fetchAll();

}


//funcion que retornara el id pasado por $_GET['id'] usado para el single.php
function id_articulo($id)
{
    //limpiamos los datos y la casteamos para que solo pase entero
    return (int)limpiarDatos($id);
}


//funcion que devolvera la informacion del post filtrado por id
function obtener_post_id($conexion, $id)
{
    //guardamos en una variabl la ejcucion del query
    // donde nos devovlera solo 1 registro
    $resultado = $conexion->query("SELECT * FROM articulos WHERE id = $id LIMIT 1");
    //alamcenando en la varaible todos los resultados
    $resultado = $resultado->fetchAll();
//retornamo la variable resultado de contener algo de lo contrario retoranar falase
    return ($resultado) ? $resultado : false;
}

//funcion que devolvera la cantidad de paginas a mostrar en la paginacion
function numero_paginas($post_por_pagina, $conexion ){
    //varaible que almacenara la cantidad de elemntos devuelto
    $total_post = $conexion->prepare(
        "SELECT FOUND_ROWS() AS total"
    );

    $total_post->execute(); //ejecutamos el query

    $total_post = $total_post->fetch()['total']; //guardamos en la misma variabl eel valor  devuelto en la consulta

//en una varaible almacenmos la divicion de total de productos / cantidad de pos a mostrar por pagina
    //nos devolera el numero de paginas a mostrar
    // con ceil aproximamos siempre al numero mayor por si llega a dar decimal
    $numero_paginas = ceil($total_post / $post_por_pagina);
    return $numero_paginas ;
}

//funcion encaragda de seear las fechas
function fecha($fecha)
{
    //strtotime -> convierte una cadena texto a tipo fecha
    $seteaFecha = strtotime($fecha);
    //Arerglo de meses
    $meses = [
        'Enero',
        'Febrero',
        'Marzo',
        'Abril',
        'Mayo',
        'Junio',
        'Julio',
        'Agosto',
        'Septiembre',
        'Octubre',
        'Noviembre',
        'Diciembre'
    ];
    //usamos la funcion date, escifcandole d -> para obetener el dia de la fecha
    $dia = date('d' , $seteaFecha);
    $mes = date('m' , $seteaFecha);
    $mes = $mes - 1; //descontamos en 1 ya que el arreglo inicia en 0
    $ano = date('Y' , $seteaFecha);

    //unicficamo sen una varaible la fecha bonita
    $fecha = "$dia de $meses[$mes] del $ano";

//retornamos la fecha ya seteada
    return $fecha;
}


//funcion que comprobara la funcion
function comprobarSession(){
    //comprobacion en si ya existe y esta sedteda la variable session
    if(!isset($_SESSION['admin'])){
        header('Location: ' .RUTA);
    }
}

?>