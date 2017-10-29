<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Iniciar Sesion</title>
	<style>@font-face {
			    font-family: pit;
			    src: url(CaviarDreams.ttf);
			}
		*{font-family: 'pit', sans-serif;}
		input, select{border:3px solid #ccc ;margin-bottom: 5px;padding: 5px;font-size: 14px;}

		.caja_ss{
			position: center;
			border: 3px solid #000;
			padding:2%;
			width:50%;
			margin: 20%;
		}

		@media (min-width:412px){
			.caja_ss{
				position: auto;
				border: 3px solid #000;
				padding:5%;
				width:50%;
				margin: 20%;
		 }
		 input, select{border:3px solid #ccc ;margin-bottom: 10px;padding: 5px;font-size: 35px;}
		 a, label{margin-bottom: 20px;padding: 5px;font-size: 35px;}
	}
	@media (min-width:768px){
			.caja_ss{
			position: auto;
			border: 3px solid #000;
			padding:5%;
		
			width:50%;
			margin: 20%;
	 }
	 input, select{border:3px solid #ccc ;margin-bottom: 20px;padding: 5px;font-size: 20px;}
	 a, label{margin-bottom: 20px;padding: 5px;font-size: 20px;}
        
	}
	
	@media (min-width:1024px){
		.caja_ss{
			position: auto;
			border: 3px solid #000;
			padding:5%;
		
			width:25%;
			margin: 20%;
	 }
	 input, select{border:3px solid #ccc ;margin-bottom: 20px;padding: 5px;font-size: 20px;}
	 a, label{margin-bottom: 20px;padding: 5px;font-size: 20px;}
}

	@media (min-width:1280px){
		.caja_ss{
			position: auto;
			border: 3px solid #000;
			padding:2%;
			width:20%;
			margin: 10%;
	 }
	 input, select{border:3px solid #ccc ;margin-bottom: 20px;padding: 10px;font-size: 18px;}
	 a, label{margin-bottom: 20px;padding: 10px;font-size: 18px;}
}

		</style>
</head>
<body>
<center>
<br><br><br>
	<div class="caja_ss">
	<h2></h2>
	<form action="validar_session.php" method="POST">
		<label for="">Usuario</label>
		<input type="text" name="usuario" required maxlength="30" minlength="4"><br>
		<label for="">Contraseña</label>
		<input type="password" name="pass" required maxlength="30" minlength=""><br>
		
		<input type="submit" value="ENTRAR"><br>
		<a href="registro.php">Registrarse</a>
	<?php
	if (isset($_COOKIE['usuario'])){
    	echo 'Valor de la Cookie '. $_COOKIE['usuario'];
	}else{
		// echo 'No hay Cookies';
	} 
?>
	</form>
	</div>
</center>
</body>
</html>