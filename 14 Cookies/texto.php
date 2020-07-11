<?php


// Validamos que se halla crado la cookie de nombre font-size
if(isset($_COOKIE['font-size'])){

// Guardo el valor de la cookie en una varaible
// selecciono la funcion cookie y le paso po paranmetro el nomnre de la cooki
    $tamaño = $_COOKIE['font-size'];
}else{
    $tamaño = '15px';
}



?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <style>
        p{
            font-size: <?php echo $tamaño ?> ;
        }
    </style>
    <title>Document</title>
</head>
<body>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid eius iure, magni mollitia officia quaerat.
    Consequatur dicta distinctio eligendi facere necessitatibus. A, facilis, voluptate. Architecto cum debitis minima
    nam tenetur!</p>
</body>
</html>
