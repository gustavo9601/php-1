<?php session_start();

require_once 'config.php';
require_once '../functions.php';


//llamamos a funcion que validara si existe la session la dejara de lo contrario se redireccionara al index
comprobarSession();


//creando l aconexion
$conexion = conexion($db_config);

if (!$conexion) {
    header('Location: ../error.php');
}


//validamos si se envio por post para actualizar
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $titulo = limpiarDatos($_POST['titulo']);
    $extracto = limpiarDatos($_POST['extracto']);
    $texto = $_POST['texto'];
    $id = limpiarDatos($_POST['id']);
    $thumb_guardada = $_POST['thumb-guardada'];
    $thumb = $_FILES['thumb'];



//comprobamos si se selecciono otra imagen , de lo contraraio se dejara la que ya estaba
    if (empty($thumb['name'])) {
        $thumb = $thumb_guardada;
    } else {  //si se selecciono otra imagen vamos a caragr esta nueva
        $destino = '../imagenes/' . $_FILES['thumb']['name'];

        //cargaramos la iamgen al servidor
        move_uploaded_file($_FILES['thumb']['tmp_name'], $destino);

        $thumb = $_FILES['thumb']['name'];

        echo $thumb;
    }

//pasamos a generar el updatesobre la bd
    //preparamos el query
    
        $statement = $conexion->prepare(
            "UPDATE articulos SET titulo = :titulo, extracto = :extracto, texto = :texto, thumb = :thumb
              WHERE id = :id"
        );

        //ejecutamos el query
        $statement->execute([
            ':titulo' => $titulo,
            ':extracto' => $extracto,
            ':texto' => $texto,
            ':thumb' => $thumb,
            ':id' => $id

        ]);

//redirijimos
  header('Location: ' .RUTA. 'admin');

    echo '<h1>Se ejecuto </h1>';
} else {
    //usamos la funcion id artiuclo y le pasamos el id que se pase en la url
    $id_articulo = id_articulo($_GET['id']);


    if (empty($id_articulo)) {
        header('Location: ' . RUTA . 'admin');

    }

    $post = obtener_post_id($conexion, $id_articulo);

    //si no se devuevle ningun post se redirecciana al panel de control
    if (!$post) {
        header('Location: ' . RUTA . 'admin');

    }

    //le decimos que inicialice desde la posicion 0
    $post = $post['0'];
/*    echo '<pre>';
    print_r($post);*/


}

require_once '../views/editar.view.php';
?>