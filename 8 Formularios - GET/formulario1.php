<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<!--  con el name, le pasamos los parametros a php
      action  -> indicamos a que archivo enviar la informacion
        value = es el valor que se pasara a php
        method -> POST O GET
        GET -> recibe toda la informacion por URL

-->
    <form action="recibe.php" method="get" name="">
    <input name="nombre" type="text" placeholder="Digita tu Nombre">
    <br>
    <label for="hombre">Hombre</label>
    <input id="hombre" type="radio" name="sexo"  value="hombre">
    <br>
    <label for="mujer">Mujer</label>
    <input id="mujer" type="radio" name="sexo"  value="mujer">
    <br>
    <select name="year" id="year">

        <?php

        for($i=2000 ; $i<2100 ; $i++){
            echo ' <option value="' . $i . '">' . $i . '</option>';
        };

        ?>
    </select>
    <br>
    <label for="terminos">Acepta los terminos</label>
    <input type="checkbox" name="terminos" id="terminos">
    <br>

    <input type="submit" value="enviar">
</form>


</body>
</html>