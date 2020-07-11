<?php
/*
 *
 * count()  //cuanto los ellemto de array
 * sort()   // ordena los elemntos del 1 al mayor
 * rsort()   // los ordena inversamente
 * */

$miArray = array(

    'Dato1' => 50000,
    'Dato2' => 9000000

);
// informacion detallada de vairable
var_dump( $miArray );

// Informacion rapida de una varaible
print_r( $miArray );




/*************************************/
//FUNCIONES


function suma ($val1 , $val2){
   return $val2 + $val1;
};

echo '<br/>' .'La suma es = ' . suma( 1000 ,200 ) . '<br/>';
$resultadoSuma = suma( 10044440 ,277700 );
echo 'La segunda suma en guardada en una varaible es = ' .$resultadoSuma . '<br/>';



/**********************************/
// FUNCIONES DE CADENAS DE TEXTO


echo '<hr><h1>Trabajando Con Funciones de texto</h1>';
$texto = '< > $ "    "';  // Ejemplo de caracteres especiales
echo htmlspecialchars( $texto ) . '<br/>'; // esta funcion convierte los carateres esciales a texto
$texto2 = 'Hola     Como   Vas' . '<br/>';
echo trim( $texto2 ); // Funcion que elimina los espacio en blanco
$texto3 = 'jjjjjjjjjjjjjjjjjj';
echo strlen( $texto3 ) . '<br/>';  // funcion que permite saber la cantidad de caraterres de la varaible
$texto4 = 'Hola ingeniero';
echo substr( $texto4, 1, 6 ) . '<br/>'; // cortando el texto ($varaible, donde cortamos, cuantos carateres)
$texto5 = 'holaaaaaaaaaaAAAAAAAAA';
echo strtoupper( $texto5 ) . '<br/>'; // convierte a masyuculas
echo strtolower( $texto5 ) . '<br/>'; // COnvierte a minusculas
$texto6 = 'Godd Morning Ingeenier' . '<br/>';
echo strpos( $texto6 , 'i' ); // funcion que devuelve la posicion de la letra ($variable , letra a buscar)


/**************************************/
// FUNCIONES DE ARREGLOS
$arreglo = array(
    'telefono' => 777777,
    'nombre' => 'gustavo',
    'pais' => 'colombia'
);


extract( $arreglo ); // Funcion permite convertir el incide en variables y se pueden llamar despues =
echo $telefono;  // este es el indice del array



$arreglo2 = array(
  'Lunes','Martes','Miercoles'
);
echo '<hr>';
foreach ( $arreglo2 as $valor) {
    echo 'Dia = ' . $valor . '<br/>';
}

array_pop( $arreglo2 ); // pop elimnamos el ultimo elemento
foreach ( $arreglo2 as $valor) {
    echo 'Dia = ' . $valor . '<br/>';
}


$arreglo3 = array(
    'Lunes','Martes','Miercoles'
);

echo join(  ' - ' ,$arreglo3 ) . '<br/>' ; // join, permite mostrar el arrray separador or le parametro

$invertiendoArrary = array_reverse( $arreglo3 ); // array_reverse  // invierte el array
echo join(  ' - ' , $invertiendoArrary ) . '<br/>';

/************************************************/
// FUNCIONES MATEMATICAS

echo '<br/>';
$num1 = 45.66666;
echo round( $num1 ) .  '<br/>'; // redondea el numero al mas cercano
echo round( $num1 , 3 ) .  '<br/>'; // redonde el numero, pero mostran 3 decimales

$num2 = 3.222;
echo ceil( $num2 ) .  '<br/>'; // ceil -> reodndea al numero menor

$numerAleatorio = rand( 1,10 ); // numero aleatorio entre los parametros (min, max)
echo 'Numero aleatorio' . $numerAleatorio .  '<br/>';
?>


