<?php session_start(); //inicializamos la sesion
/*
  * Achivo encrgado de realizar todas las validaciones
  * y si todo es correcto
  * */

//Validamos que si existe o no la una sesion, de lo contrario lo redirigira
if (isset($_SESSION['usuario'])) {
    header('Location: index.php'); /*
 Se redirecciona al index, para que cuando inicie sesion no tenga acceso a los formualrio
 */
}

//Validamos el metodo de envio, si retorna true siginifca que s eneviaron
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //recibiendo en variables los valores
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];
    $password2 = $_POST['password2'];
    $errores = ''; //variable q gurdara los posibles errores


    //convertimos a minuscula el susuario
    $usuario = trim($usuario); // quitamos espacios en blanco
    $usuario = strtolower($usuario);
    $usuario = filter_var($usuario, FILTER_SANITIZE_STRING); //sanititzamos



    //validamos si estan vacios algunos de los campos
    if (empty($usuario) or empty($password) or empty($password2)) {
        $errores .= '<li>Por favor rellena todos los campos</li>'; // guardamos el error en la variable $error

    } else {
        // Si los campos se diiligenciaron correctamente conectaremos con la BD
        try {
            //conexion
            $conexion = NEW PDO(
                'mysql:host=localhost;dbname=login',
                'root',
                ''
            );
        } catch (PDOException $e) {
           echo "Error de conexion = " . $e->getMessage();
        }


        //creacion del query
        $sql = 'SELECT * FROM usuarios WHERE usuario = :usuario LIMIT 1'; //query de validacion si existe el usuario
        // preparacion del query, y la guardamos en una varaible
        $statement = $conexion->prepare($sql);
        //Ejecutamos el query
        $statement->execute([
            ':usuario' => $usuario //pasamos por parametro el usuario que pasamo en el input
        ]);
        // guardmos en la variable resultado, el reusltado de la conuslta, de no devolver nada retornara false
        $resultado = $statement->fetch();

        //condicional que valida si esta creado o no el usuario
        if ($resultado != false) { //si la variable es diferente a false
            $errores .= '<li>El usuario ya existe, intenta de nuevo</li>  ';
        }

        //Encriptamos similar a mn5, la contraseña
        $password = hash('sha512', $password);
        $password2 = hash('sha512', $password2);

        //condicional que valida si son oiguales o no las constraseñas
        if ($password != $password2) {
            $errores .= '<li>Contraseñas diferentes</li>';
        }


        // validamos que no se hallan almacendao errores en la variable y pordemos con la insersion
        if ($errores == '') {
            //query de isnert
            $sql2 = 'INSERT INTO usuarios (id,usuario,pass) VALUES (null, :usuario, :contrasena)'; //null ya que es incremental
            //preparacion de insersion
            $statement2 = $conexion->prepare($sql2);
            //ejecutamos el query insert pasando los parametros
            $statement2->execute([
                ':usuario' => $usuario,
                ':contrasena' => $password
            ]);
            

            //echo '<h1>Se ejecuto</h1>';
            //redirigimos al usuario al formulario de login para que ingrese
            header('Location: login.php');




        }
    }


}


//importando la vista del archivo de resgistrate
require_once 'views/registrate.view.php';


?>