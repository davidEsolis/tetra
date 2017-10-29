<?php include "../app/conexion.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Creacion de documentos</title>

    <link rel="stylesheet" href="../css/style.css">
    <link href="https://file.myfontastic.com/g3LYwuYrqLK8Mz9Nf7FKeV/icons.css" rel="stylesheet">
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
        
        function getNameById( $id){
            global $conexion;

            $sql = "SELECT nombreUsuario FROM alums WHERE id = ' $id";
            $result = mysqli_query($conexion, $sql);

            if($result){
                $row = mysqli_fetch_assoc($result);
                return $row['nombreUsuario'];
            } else{
                echo "Error al leer el nombre de usuario -> " . mysqli_error($conexion);
            }
        }
    ?>
   
   <div id="fondo">
   <img src="../img/dartlogo.png" alt="#">
<div id="header">
 <ul class=" nav">
     
     <li><a class="icon-home-1"
      href="../index.php"> Inicio |</a></li>
     <li><a class="icon-atom"
      href="#"><?php echo " ".$usu ?></a>
         <ul>           
             <li><a class="icon-settings"
             href=""> Configuraciones</a>
             <ul>
                 <li><a class="icon-rocket"
                 href=""> Ayuda</a></li>
                 <li><a class="icon-moon"
                 href="../salir.php"> Salir</a></li>
             </ul>
         </ul>
     </li>
     <li><a class="icon-chart-line"
      href=""> Materias |</a></li> 
            
 </ul>
</div>
</div>
    
    
</body>
</html>