<?php session_start(); // iniciar sesion en otdas las paginas

//Preguntamos si ya esta iniciada la sesion de name usuario, lo rediijimos
// al index para que no tenga acceso a los fomularios
if (isset($_SESSION['usuario'])) {
    header('Location: index.php');
}

// condicional que preguntara si el metodo de envio == post si se envio
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];
    $errores = ''; //variable de errores
    //sanitizacion de variaables, y la convierto a minusculas con sttolower
    $usuario = filter_var(strtolower($usuario), FILTER_SANITIZE_STRING);
    //haheasmos las pasword con el algotimo sha512
    $password = hash('sha512', $password);

    try {
        //Conexion con uestra BD
        $conexion = NEW PDO(
            'mysql:host=localhost;dbname=login',
            'root',
            ''
        );
        // creamos el query
        $sql2 = 'SELECT * FROM usuarios WHERE usuario = :usuario AND pass = :password';

// preparamos el query

        $statement = $conexion->prepare($sql2);
// Ejcutamos el query pasando los parametros
        $statement->execute([
            ':usuario' => $usuario,
            ':password' => $password
        ]);
// guardamos en una varaible si retorna o no el resultado con fetch
        $resultado = $statement->fetch();

// validamos si retorno la consulta o si dio false
        if ($resultado !== false) { //validamos si lo que se retorno es diferente a false
            $_SESSION['usuario'] = $usuario;  //le asginamos a la session de name usuario, el valor del nombre de usuario
            header('Location: index.php'); //se redirecciona al index, y el index ve que esta creada la sesion lo reidreccionara al contenido.php
        } else {
            $errores .= '<li>El usuario o contraseña son incorrectos </li>';
        }
    } catch (PDOException $e) {
        echo 'Error de PDO = ' . $e->getMessage();
    }
}


// importando la vista
require_once 'views/login.view.php';
?>