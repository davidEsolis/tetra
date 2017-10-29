<?php 
include "app/escrituraBd.php";

$usuario = $_POST['nombre'];
$pass = $_POST['pass'];
$email = $_POST['email'];

$id = registrar_usuario($usuario, $pass, $email);

if($id != "error"){
    echo "OK"; 
    setcookie('id', $id, time() + 4800);
    header("Location: vistas/verPerfil.php");
} else echo("Error No se pudo obtener el id");
           

 ?>