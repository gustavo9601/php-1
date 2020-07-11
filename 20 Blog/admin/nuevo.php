<?php session_start();

require_once 'config.php';
require_once '../functions.php';


//llamamos a funcion que validara si existe la session la dejara de lo contrario se redireccionara al index
comprobarSession();


//creando l aconexion
$conexion = conexion($db_config);

if(!$conexion){
    header('Location: ../error.php');
}
//VALIDANDO QUE SE HHALA ENVIADO EL FORMULARIO
if($_SERVER['REQUEST_METHOD'] == 'POST'){
$titulo = limpiarDatos($_POST['titulo']);
    $extracto = limpiarDatos($_POST['extracto']);
    $texto = $_POST['texto'];
    $thumb = $_FILES['thumb']['tmp_name']; //guardamos el nombre del archivo


    //guardasmo en una variale la ruta total del archivo con el nomre
    $archivo_subido = '../imagenes/' .  $_FILES['thumb']['name'];

    //funcion porpia de php que permite mover la imagen a un destino($nombre_archivo, Ruta + nombre de archivo);
    move_uploaded_file($thumb, $archivo_subido);


   // echo '<h1>'.     $archivo_subido .' </h1>';

//preparamos la conexion con e query


        $statement = $conexion->prepare(
            "INSERT INTO articulos (id,titulo,extracto,fecha,texto,thumb)
        VALUES (null, :titulo, :extracto,now(), :texto, :thumb)"
        );

        //ejecutamos el query

        $statement->execute(
            [
                ':titulo' => $titulo,
                ':extracto' => $extracto,
                ':texto' => $texto,
                ':thumb' => $_FILES['thumb']['name']  //accedienteo al nomnre del archivo
            ]
        );


//    echo '<h1>Lellgo hasta qui</h1>';
header('Location: ' . RUTA .'admin');

}

require_once '../views/nuevo.view.php';



?>