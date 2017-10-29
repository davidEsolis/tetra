<?php 
include 'app/conexion.php';

$usuario = "";
$pass = "";
$email = "";
$id = "";



if(isset($_POST['usuario'])){
  $usuario = $_POST['usuario'];
  $pass = $_POST['pass'];



    $sql = "SELECT id, email,  nombreUsuario FROM alums WHERE nombreUsuario = '$usuario' AND pass = '$pass'";
   
    $result = mysqli_query($conexion, $sql);
  
    if( mysqli_num_rows($result) > 0){
    while ($row = mysqli_fetch_assoc($result)){
        $id = $row['id'];
        $usuario = $row['nombreUsuario'];
    }
}   

setcookie('id', $id, time() + 4800);
setcookie('usuario', $usuario, time() + 4800);

  header("Location: index.php");
    }
    else{
		  echo "Error al leer id usuario -> " . mysqli_error($result);
    }

   


 ?>

