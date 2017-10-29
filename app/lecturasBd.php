<?php
include "conexion.php";

//funcion para leer el contenido del formato y asi extraer posteriormente ls {{atributos}}
function leer_contenido_formato(){
    global $conexion;
    global $id_formato_global;
    $datos_formato = array();
    
    $sql = "SELECT nombre, contenido FROM formato WHERE id = '$id_formato_global'";
    $result = mysqli_query($conexion, $sql);

    if(mysqli_num_rows($result) > 0){
        while ($row = mysqli_fetch_assoc($result)) {
            $datos_formato[] = $row['nombre'];
            $datos_formato[] = $row['contenido'];
        }
        return $datos_formato;
    } else{
        echo "Error al leer el formato -> " . mysqli_error($conexion);
    }
}

function guardar_carta($idUsuario, $nombre, $id_formato, $contenido_carta){
    global $conexion;
    $usuario = $idUsuario;
  
    $insertar = "INSERT INTO carta(nombre, idFormato, idUsuario, contenido) 
                VALUES ('$nombre', '$id_formato', '$usuario', '$contenido_carta')";
   
    if (mysqli_query($conexion, $insertar)){
            header("Location: ../index.html");
    } else {
        echo "Error al guardar la carta: " . $insertar . "<br>" . mysqli_error($conexion);
    }
}

function leer_carta($id_carta){
    global $conexion;

    $sql = "SELECT contenido FROM carta WHERE id = '$id_carta'";
    $result = mysqli_query($conexion, $sql);

    if(mysqli_query($conexion, $sql)){
        $row = mysqli_fetch_assoc($result);
        return $row['contenido'];
    } else{
        echo "Error al leer -> " . mysqli_error($conexion);
    }
}

function getByEmail($email){
    global $conexion;

    $sql = "SELECT id FROM usuario WHERE email = '$email'";
    $result = mysqli_query($conexion, $sql);

    if($result){
        $row = mysqli_fetch_assoc($result);
        return $row['id'];
    } else{
        echo "Error al leer el email -> " . mysqli_error($conexion);
    }
}


?>