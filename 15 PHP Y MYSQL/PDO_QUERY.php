<?php
/*
  * Conexion por PDO
  * */

try {

    // Coenxion creando un objeto de PDO
    $conexion = new PDO(
        'mysql:host=localhost;dbname=tienda', // Conexion server,,BD
        'root', // usuario
        '' // Contraseña
    );
    echo 'Se establecio conexion correctamente';


    // Forma 1

    /*Guadamos en una varaible los reusltado del query en forma de Array
     * Accdemos al ->query // medtodo de la conexion
     * */
    $resultados = $conexion->query('SELECT * FROM articles');

    foreach ($resultados as $valor) {
        // Imprimimos linea linea , especificando el nombre de la columna a mostrar
        echo '<br/>'. $valor['name'] . ' - ' . $valor['price'] .  '<br/>';
    }

    

} catch (PDOException $e) {
    // Guardamos errores de conexion de tipo PDoexception
    echo 'Error de conexion : ' . $e->getMessage();
}


?>