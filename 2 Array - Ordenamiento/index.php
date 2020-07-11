<?php

$arraryMeses = array(
    'Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'

);
//Funcion sort Ordena un array en Orden Alfabetico
sort( $arraryMeses );

echo 'MES ORDENADO ALFABETICAMENTE ' . '<br />';
foreach ( $arraryMeses as $mes){
  echo $mes . '<br />';
};

echo 'MES ORDENADO ALFABETICAMENTE A LA INVERSA ' . '<br />';
// rsort -> Ordena alfabeticamente el array a la inversa
rsort( $arraryMeses );
foreach ( $arraryMeses as $mes){
    echo $mes . '<br />';
};
/*************************************/
$arrayNumero = array(1,200,800,4,5);
sort( $arrayNumero );
echo 'ORDENANDO UN ARRAY DE NUMEROS' .'<br />';
foreach ( $arrayNumero as $numero ){
  echo $numero . '<br />';
};



?>
