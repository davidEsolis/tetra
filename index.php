<?php include "app/conexion.php"; ?>
<?php
function getNameById($id){
            global $conexion;

            $sql = "SELECT nombreUsuario FROM alums WHERE id = '$id'";
            $result = mysqli_query($conexion, $sql);

            if($result){
                $row = mysqli_fetch_assoc($result);
                return $row['nombreUsuario'];
            } else{
                echo "Error al leer el nombre de usuario -> " . mysqli_error($conexion);
            }
        }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Creacion de documentos</title>

    <style>
    a{
        font-weight: bold;
    }
    </style>
     
    <link rel="stylesheet" href="css/style.css">
    <link href="https://file.myfontastic.com/g3LYwuYrqLK8Mz9Nf7FKeV/icons.css" rel="stylesheet">
    
    <!--meta:vp--><meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body style="background: #979797" >
    <?php

    $idUsuario = "";
    $usu = ""; 
    
        if(isset($_COOKIE['id']) && isset($_COOKIE['usuario'])){
            $idUsuario = isset($_COOKIE['id']);
            $usu = $_COOKIE['usuario'];
          // echo($idUsuario." id del usuario en sesion");

           //echo("<div class="nav"><br> <li><a href='#'>".$usu."</a></li></div>");
           
        }

    ?>
    
    <!--AQUI SE ENCUENTRA EL MENÚ -->
  

 <div class="header">
          
          
         <ul class="nav">
                        <li><a href="index.php"><span class="icon-home-1" ></span> Inicio |</a></li>
                        <li><a href="#" ><span class="icon-atom" ></span> <?php echo " ".$usu ?></a>
                            <ul>
                            <li><a href="vistas/verPerfil.php"><span class="icon-coffee-streamline" ></span> Perfil</a></li>
                                
                                <li><a href=""><span class="icon-settings" ></span> Configuraciones</a>
                                <ul>
                                    <li><a href=""><span class="icon-rocket" ></span> Ayuda</a></li>
                                    <li><a href="salir.php"><span class="icon-moon" ></span> Salir</a></li>
                                </ul>
                            </ul>
                        </li>
                        <li><a href=""><span class="icon-chart-line" ></span> Materias |</a></li> 
                    </ul>
                    
            
 </div>
    <!-- -->
    
       <!--AQUI SE TERMINA EL MENÚ -->
      <div class="container">
          <h1>mi texto</h1>
          <p>
          
Closed := Closed ∪ {Node}
          </p>
      </div>
</body>
</html>