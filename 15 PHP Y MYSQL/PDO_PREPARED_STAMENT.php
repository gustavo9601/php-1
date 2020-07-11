<?php
/*
 * Fectc -> solo devuelve 1 valor
 * FectchAll -> Devuelve todos los valores
 *
 * */



try {
//1. Creamos la conexion
    $conexion = NEW PDO(
        'mysql:host=localhost;dbname=tienda',
        'root',
        ''
    );

    echo 'Conexion Exitosa ' . '<br/>';
//2. Creamos el stament con el query
    // Guardamos en una varaible la preparacion de la consula
    // :id siginifica que espera que pasaremos un parametro
    $statement = $conexion->prepare('SELECT * FROM articles WHERE id = :id');

//3. Ejecutamos el query pasando lo parametros
    //Ejcutamos la consulta preparada
    // Pasamos en forma de parametros los paraemtros requereidso
    $statement->execute([
        ':id' => 3
    ]);


//4. Mostramos el reusltado
    // gurdamos en una varaible el stament, incondao al memtodo fetch
    //fect -> devuelve en forma de arreglo los resultados
    $resultados = $statement->fetch(); // Fetch solo deuvleve un valor
    echo '<pre>';
    print_r($resultados);
    echo '</pre>';
    echo '++++++++++++++++++++++++++++++++++++++++++++++++++ <br/>';



 /******************************************************************/
    //Ejemplo 2;

    // Preparo la consulta ya que la conexion ya esta creada
   $statement2 = $conexion->prepare('SELECT * FROM articles') ;

    //Ejcuto la consulta
    //No paso parametros ya que no se requiren
    $statement2->execute();

    //Mostrar la informacion
    $resultados2 = $statement2->fetchAll(); // Con fetc all devolve todos los resultados
    echo '<pre>';
     print_r($resultados2);
    echo '</pre>';

    // Mostrando l ainformacion de forma 2
    echo 'Mostrando l ainformacion de forma 2 <br/>';
    foreach ($resultados2 as $valor){
        echo 'Descripcion Producto = ' . $valor['name'] . ' Precio = ' . $valor['price'] . '<br/>';
    }


    /*************************************************************************/
    //INSERCION USANDO PDO

    //creamos el query
    $sql = "INSERT INTO articles VALUES(7,:description,'Carisima',5000,'','',NOW(),NOW())";

    // Preparamos el query
    $statement3 = $conexion->prepare($sql);
    // La ejcucion la gurdamos en una varaible para despues validar si se ejcuto correctamnte
    $ejecutando = $statement3->execute([
        'description' => 'Camiseta MNG'
    ]);

    //Validamos que devulve o se ejcute vien la ejcucion
    if( $ejecutando ){
        echo '****************Se inserto correctamente <br/>';
    }else{
        echo '******************No se pudo insertar <br/>';
    }


} catch (PDOException $e) {
    echo 'Error de Conexion = ' . $e->getMessage();
}


?>