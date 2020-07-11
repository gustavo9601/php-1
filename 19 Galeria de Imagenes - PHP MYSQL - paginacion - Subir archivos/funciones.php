<?php

/*
 * Archivo que conteine todas las funciones
 * de la app
 * */


//Funcion de conexion a la BD
function conexion($bd, $usuario, $pass){
    try{

        $conexion = NEW PDO(
          "mysql:host=localhost;dbname=$bd;",
            $usuario,
            $pass
        );

        // Si la conexion es efectiva devolvera la conexion
        return $conexion;

    }catch( PDOException $e ){
        //Si no funciona correctamente la funcion devolvera false
        return false;
    }
}


?>