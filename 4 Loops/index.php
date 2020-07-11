<?php
/*
  * Ciclos
  * */

$limite = 200;


echo '<h1>Numero de 5 en 5 a 1000</h1>';
//For
for ($i = 0; $i <= $limite; $i += 5) {
    echo 'Numero . ' . $i . '<br />';
}


//While
echo '<h1>Numero de 100 en 100 a 1000</h1>';
$i = 0;
while ($i < $limite) {
    echo 'Numero . ' . $i . '<hr>';
    $i += 100;
};


$miArraglo = array(
    'dato1',
    2,
    'Holaaaa'
);

// Ciclo FOR
for ($i = 0; $i < count($miArraglo); $i++) {
    echo 'Posicion No . ' . $i . ' = ' . $miArraglo[$i] . '<br/>';
};

echo '<br/><hr>';

$contador = 0;

// Ciclo while
while ($contador < count($miArraglo)) {
    echo 'Posicion No . ' . $contador . ' = ' . $miArraglo[$contador] . '<br/>';
    $contador++;
};

echo '<br/><hr>';

//Ciclo do while
$cont = 0;
do {
    echo 'Posicion No . ' . $cont . ' = ' . $miArraglo[$cont] . '<br/>';
    $cont++;
} while ( $cont < count($miArraglo)  );

echo '<br/><hr>';

//Ciclo forach

foreach ( $miArraglo as $posicion => $valor ){
    echo 'Posicion No . ' . $posicion . ' = ' . $valor . '<br/>';
};



?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

    <h1>Usando FOR EACH</h1>
    <ul>
        <?php

        $datos = array(
            'Nombres' => 'Gustavo Marquez',
            'Edad' => 20,
            'Profesion' => 'Desarrollador Full Stack'
        );

        foreach ( $datos as $posicion => $valor) {
            echo '<li>' .  $posicion  . '= ' . $valor . '</li>';
        }


        ?>

    </ul>

</body>
</html>
