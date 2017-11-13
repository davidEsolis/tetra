<?php
require 'conexion.php'
$nombre= $_POST["nombre"];
$email= $_POST["email"];
$mensaje= $_POST["mensaje"];


$sql = "INSERT INTO contacto(nombre, email, mensaje) VALUES ($nombre, $email, $mensaje)";

 $sql_t = "SELECT * FROM contacto";

 mysqli_query($mysqli, $sql) or die (mysql_error($mysqli));
 mysqli_query($mysqli, $sql_t) or die (mysql_error($mysqli));
mysqli_close($mysqli);


echo $sql_t;

/*
if($nombre != "" && $mensaje != "" && $email != ""){
    echo 'Correcto';
}else{
    echo 'Incorrecto';
}

*/


?>