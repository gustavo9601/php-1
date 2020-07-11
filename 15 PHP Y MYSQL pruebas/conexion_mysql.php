<?php

//Creamos la conexion
$conexion_pdo = NEW PDO(
    'mysql:host=127.0.0.1;dbname=tienda',
    'root',
    ''
);


//Cremoa la consulta
$consulta = 'SELECT * FROM articles';

//Preparammos la consulta
$statement = $conexion_pdo->prepare($consulta);

// Ejcutamos la consulta
$statement->execute();


// Guardmos los resultados
$resultados = $statement->fetchAll();

foreach ($resultados as $fila) {

    echo '<tr>';
    echo '<td>'. $fila['id'] .'</td>';
    echo '<td>'. $fila['name'] .'</td>';
    echo '<td>'. $fila['description'] .'</td>';
    echo '<td>'. $fila['price'] .'</td>';
    echo '</tr>';

};


//imprimimos los resutlados
// print_r($resultados);




?>