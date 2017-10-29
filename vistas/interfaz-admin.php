

<?php include "../app/conexion.php"; ?>
<?php
// if (isset($_COOKIE['Usuario'])){
//     // echo 'Valor de la Cookie '. $_COOKIE['Usuario'];
// }else{
//     header('Location: /proyecto/creacion-formatos/CreacionDeFormatos/entrar.php');
// }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Creacion de documentos</title>
        
</head>
<body style="background: #979797" >
<?php
function getNameById($id){
    global $conexion;

    $sql = "SELECT nombreUsuario FROM usuario WHERE id = '$id'";
    $result = mysqli_query($conexion, $sql);

    if($result){
        $row = mysqli_fetch_assoc($result);
        return $row['nombreUsuario'];
    } else{
        echo "Error al leer el nombre de usuario -> " . mysqli_error($conexion);
    }
}
?>
    <center>
        <h1>Formatos Creados</h1>
        <table border="1" cellspacing="0" cellpading="5px">
            <tr>
                <th>ID</th>
                <th>FORMATO</th>
                <th>USUARIO</th>
                <th>FECHA DE CREACION</th>
                <th>CALIFICACION</th>
                <th>ACCION</th>
            </tr>

            <?php 
        
                $sql = "SELECT id, nombre, usuario_creador, fecha_creacion, calificacion FROM formato";
                $result = mysqli_query($conexion, $sql);
                $nombre = "";
                if(mysqli_num_rows($result) > 0){
                    while ($row = mysqli_fetch_assoc($result)) {
                    $nombre = getNameById($row['usuario_creador']);

            ?>
             <tr>
                <td><?=$row['id']?></td>
                <td><?=$row['nombre']?></td>
                <td><?=$nombre?></td>
                <td><?=$row['fecha_creacion']?></td>
                <td><?=$row['calificacion']?></td>
                <td>
                    <a href = "vistas/crearFormulario.php?id=<?=$row['id']?>">Usar</a>
                </td>
            </tr>
            <?php
                        }
                }
            ?>
        </table>
    </center><br><br><br>

     <center>
        <h1>Cartas Creadas (Oficiales)</h1>
        <table border="1" cellspacing="0" cellpading="5px">
            <tr>
                <th>ID</th>
                <th>CARTA</th>
                <th>USUARIO</th>
                <th>FECHA DE CREACION</th>
                <th>ID FORMATO</th>
                <th>ACCION</th>
            </tr>
            <?php 
        
                $sql = "SELECT id, nombre, idUsuario, idFormato, fecha FROM carta WHERE status = '1'";
                $result = mysqli_query($conexion, $sql);
                $id_carta="";
                if(mysqli_num_rows($result) > 0){
                    while ($row = mysqli_fetch_assoc($result)) {
                     $nombre = getNameById($row['idUsuario']);
            ?>
             <tr>
                <td><?=$row['id']?></td>
                <td><?=$row['nombre']?></td>
                <td><?=$nombre?></td>
                <td><?=$row['fecha']?></td>
                <td><?=$row['idFormato']?></td>
                <td>
                    <a href = "vercarta.php?id=<?=$row['id']?>">Ver</a>
                </td>
            </tr>
            <?php
                        }
                }
            ?>
        </table>
    </center><br><br><br>

    <center>
        <h1>Cartas Creadas (Eliminadas)</h1>
        <table border="1" cellspacing="0" cellpading="5px">
            <tr>
                <th>ID</th>
                <th>CARTA</th>
                <th>USUARIO</th>
                <th>FECHA DE CREACION</th>
                <th>ID FORMATO</th>
                <th>ACCION</th>
            </tr>
            <?php 
        
                $sql = "SELECT id, nombre, idUsuario, idFormato, fecha FROM carta WHERE status = '0'";
                $result = mysqli_query($conexion, $sql);
                $id_carta="";
                if(mysqli_num_rows($result) > 0){
                    while ($row = mysqli_fetch_assoc($result)) {
                     $nombre = getNameById($row['idUsuario']);
            ?>
             <tr>
                <td><?=$row['id']?></td>
                <td><?=$row['nombre']?></td>
                <td><?=$nombre?></td>
                <td><?=$row['fecha']?></td>
                <td><?=$row['idFormato']?></td>
                <td>
                    <a href = "vercarta.php?id=<?=$row['id']?>">Ver</a>
                </td>
            </tr>
            <?php
                        }
                }
            ?>
        </table>
    </center>
</body>
</html>