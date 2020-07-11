<?php
/*
 * Condicionales
 * */

$edad = 18;
$nombre = 'Gustavo';
if ( $edad < 18 && $nombre != 'Gusti'){
    echo ' <h1> Eres smenos de Edad ! </h1> ';
}else{
    echo ' <h1> Bievenido Eres Mayor de EDAD y tu nombre es = '. $nombre .'</h1> ';
}

/************************/
$numero1 = 2;

$numero1 += 5;
echo 'Valor Acumulado = ' . $numero1 .'<br/>';


if ( $numero1 == 10 ){
    echo ' Es identico a 10 <br /> ' ;
}else{
    echo 'No es identico y el valor es = ' . $numero1 . ' <br />';
}

// isset -> valida si alguna varaible tiene un valor
$edadValor = ( isset($edadValor) ) ? $edadValor: 'No existe la variable';
echo $edadValor . '<br />';

/********************************/
// Con .=  concatenamos o acumulamos texto
$texto1 = 'Hola mi nombre es = ';
$texto1 .= ' GUSTAVO MARQUEZ';
echo $texto1 . '<br />';



/**********************************/
// switch
$opcion = 2;

switch ( $opcion ){
    case 1:
        echo 'Escogiste la opcion 1 <br/>' ;
        break;
    case 2:
        echo 'Escogiste la opcion 2 <br/>' ;
        break;
    default:
        echo 'No escogiste NADA <br/>' ;
        break;
}
?>