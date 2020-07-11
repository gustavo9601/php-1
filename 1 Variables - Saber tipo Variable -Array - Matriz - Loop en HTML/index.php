<?php


$nombre = 'Gustavo';
$number = 10;
var_dump($nombre);

// Conociendo el tipo de dato de una variable
// gettype -> retorna el tipo de dato de la varaible que pasemos
echo gettype($nombre) . PHP_EOL;
echo gettype($number) . PHP_EOL . PHP_EOL;


// Constantes
define('varaible_Constante', 777777);
var_dump('El valor de la constante es = ' . varaible_Constante);


//Arreglos
$miArray = [
    'Dato 1',
    255555,
    'jejejej'
];

$arregloSemana = array(
    'Lunes',
    'Martes',
    'Miercoles'
);
var_dump($miArray);
var_dump('Accediendo a la posicion 2 del Array = ' . $arregloSemana[2]);

//Recorreindo con un loop
foreach ($arregloSemana as $posicion => $valor) {
    // <br />  -> salto de linea
    echo '$arregloSemana[' . $posicion . '] = ' . $valor . '<br />';
};


// Arreglos asociativos
$arrayDatos = array(
    'Nombre' => 'Gustavo',
    'Apellido' => 'Marquez',
    'Edad' => 20,
    'Profesion' => 'Desarrollador Full Stack and DBA'
);

echo '<br />  INFORMACION DE INGENIERO  <br />';
foreach ($arrayDatos as $posicion => $valor) {
    echo $posicion . ' = ' . $valor . '<br />';
}


//Matriz oArreglo bidemensional
$arrayAmigos = array(
    array('Gustavo', 20),
    array('Andres', 22),
    array('Nancy', 50)
);

// Accediendo a la matriz
echo '<br /><br />';
echo 'Nombre = ' . $arrayAmigos[0][0] . '<br />';
echo 'Edad = ' . $arrayAmigos[0][1] . '<br />';


//Contando el numero de valores que tenemos en nuestro arreglo
echo 'El array amigos contiene  = ' . count($arrayAmigos);


$arrayMesesAno = array(
    'Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'
);

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<h1>Meses del Año</h1>
<ul>

    <?php
    /*
     * Recorremos el array y vamos insertandoslo en una etiqueta <li> en html
     * */
    foreach ($arrayMesesAno as $posicion => $valor) {
        echo '<li>  Mes No. ' . ($posicion + 1) . ' => ' . $valor .'</li>';
    }


    ?>


</ul>
</body>
</html>


