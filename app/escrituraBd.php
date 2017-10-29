<?php
include 'conexion.php';
include 'lecturasBd.php';
    
    
function registrar_usuario($nombre, $pass, $email){
    global $conexion;

    $sql = "INSERT INTO usuario (nombreUsuario, pass, email) 
                VALUES 	('$nombre', '$pass', '$email')";
    if(mysqli_query($conexion, $sql)){
        $id = getByEmail($email);
        return $id;
        
    } else { return $id = "error";}
}

?>