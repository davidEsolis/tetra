<?php
include ("conexion.php");
$query = "SELECT * FROM alums WHERE  estado = 1 ORDER BY id ASC;";

$resultado = mysqli_query($mysqli, $query);

if(!$resultado){
die("Error");
}else{
    while($data = mysqli_fetch_assoc($resultado) ){
        //$arreglo["datos"][]= $data;
        $arreglo[]= $data;
    }
    echo json_encode($arreglo);
}

mysqli_free_result($resultado);
mysqli_close($mysqli);
?>