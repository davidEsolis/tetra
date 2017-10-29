<?php include "app/conexion.php"; ?>
<?php
if (isset($_COOKIE['id'])){
    // echo 'Valor de la Cookie '. $_COOKIE['Usuario'];
    $sql = 'SELECT * FROM alums WHERE email = "'.$_COOKIE['id'].'"';
    $sql = mysqli_query($conexion, $sql);
    $row = mysqli_fetch_assoc($sql);
}else{
    header('Location: entrar.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Creacion de documentos</title>
    	 <style>@font-face {
                font-family: pit;
                src: url(CaviarDreams.ttf);
            }
        *{font-family: 'pit', sans-serif;}
        input, select{border:3px solid #ccc;margin-bottom: 5px;padding: 5px;font-size: 14px;}
        th{    background: #fff;
    padding: 5px 21px;}
    td{    background: #ccc;
    padding: 5px 21px;}
    ul{margin:0;padding: 0;}
    li{float: left;list-style: none;padding: 3px 5px; margin-right: 5px;}
    li a{text-decoration: none; background-color: green;color: #fff;border:1px solid #000;border-radius: 3px;padding: 3px;}
    td a{background: #4e4e4e; color: #fff; margin-right: 15px; border-radius: 7px; padding: 3px; text-decoration: none;}
        </style>
</head>
<body style="background: #979797" >
    
    <div>
        <ul>
         <li><a href="index.php">Inicio</a></li>
            <li><a href="vistas/crearFormato.php">Crear nuevo formato</a></li>
            <li><a href="perfil.php">Ver mi perfil</a></li>
            <li><a href="salir.php">SALIR</a></li>
        </ul>
    </div>
<center>
	<h1>PERFIL</h1>
	<form action="registrar_sql.php" method="POST">
		<label for="">Nombre completo</label>
		<input type="text" name="nombre" value="<?php echo $row['nombreUsuario'] ?>" required><br>

		<label for="">Email</label>
		<input type="email" name="email" required value="<?php echo $row['email'] ?>"><br>

		<label for="">Curp</label>
		<input type="text" name="curp" required value="<?php echo $row['curp'] ?>"><br>

		<label for="">Telefono</label>
		<input type="number" name="tel" required value="<?php echo $row['tel'] ?>"><br>

		<label for="">Fecha de nacimiento</label>
		<input type="date" name="date" required value="<?php echo $row['date'] ?>"><br>

		<label for="">Genero</label>
		<select name="genero" required value="<?php echo $row['genero'] ?>">
			<option value="M">M</option>
			<option value="F">F</option>
		</select><br>

		<label for="">Codigo postal</label>
		<input type="number" name="cp" required value="<?php echo $row['cp'] ?>"><br>

		<label for="">Calle</label>
		<input type="text" name="calle" required value="<?php echo $row['calle'] ?>"><br>

		<label for="">Numero</label>
		<input type="number" name="numero" required value="<?php echo $row['numero'] ?>"><br>

		<label for="">Colonia</label>
		<input type="text" name="col" required value="<?php echo $row['col'] ?>"><br>


		<input type="submit" value="Enviar">
	</form>
</center>
    </center><br><br><br>

    
</body>
</html>