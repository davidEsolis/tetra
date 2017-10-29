<?php

    $servidor = "localhost";
    $root = "root";
    $pass = "";
    $base = "bd_school";

    $conexion = mysqli_connect($servidor, $root, $pass, $base);

    if (!$conexion) {
        die("Connection failed: " . mysqli_connect_error());
    }

?>