<?php

    //Parámetros necesarios para la conexión a la base de datos
    $dbHost = 'localhost';
    $dbUser = 'root';
    $dbPass = '';
    $dbName = 'php_database';

    //Conexión a la base de datos
    $conn = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);

    //Comprobar la conexión
    if (!$conn) {
        die("Conexión a la Base de Datos fallida!");
    }       

?>