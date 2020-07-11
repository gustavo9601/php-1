<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Pruebas PHP MYSQL</title>
    <style>
        table {
            border: 2px solid black;
        }

        tr, th, td {
            border: 1px solid black;
        }
    </style>
</head>
<body>

<h1>Mostrando una consulta en tablas</h1>

<table>
    <thead>

    <tr>
        <th>ID</th>
        <th>NAME</th>
        <th>DESCRIPTION</th>
        <th>PRICE</th>
    </tr>
    </thead>
    <tbody>

<!-- Invocando al archivo que trae en una tabla la consulta -->
    <?php

    require_once 'conexion_mysql.php';

    ?>


    </tbody>
</table>


</body>
</html>