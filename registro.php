<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registro</title>


	<style>@font-face {
			    font-family: pit;
			    src: url(CaviarDreams.ttf);
			}
		*{font-family: 'pit', sans-serif;}
	
		.caja_ss{
			position: auto;
			background-color: #E2C625;
			border: 3px solid #000;
			padding:5%;
			width:50%;
			margin: 20%;
		}
		@media (min-width:412){
		.caja_ss{
			position: auto;
			border: 3px solid #000;
			padding:5%;
			width:50%;
			margin: 10%;
	 }
	 input, select{border:3px solid #0D1B2C ;margin-bottom: 20px;padding: 5px;font-size: 35px;}
	 label{font-size: 35px;}
}
			
		@media (min-width:768px){
			.caja_ss{
				position: auto;
				border: 3px solid #000;
				padding:2%;
				width:50%;
				margin: 10%;
		 }
		 input, select{border:3px solid #0D1B2C ;margin-bottom: 20px;padding: 5px;font-size: 35px;}
		 label{font-size: 35px;}
	}


	
@media (min-width:1024px){
		.caja_ss{
			position: auto;
			border: 3px solid #000;
			padding:0%;
			width:40%;
			margin: 20%;
	 }
	 input, select{border:3px solid #0D1B2C ;margin-bottom: 20px;padding: 5px;font-size: 20px;}
	 label{font-size: 20px;}
}

	@media (min-width:1280px){
		.caja_ss{
			position: auto;
			border: 3px solid #000;
			padding:2%;
			width:20%;
			margin: 20%;
	 }
	 input, select{border:3px solid #0D1B2C ;margin-bottom: 20px;padding: 10px;font-size: 20px;}
	 label{font-size: 20px;}
}

		</style>


</head>
<body>
<center>
	<div class="caja_ss">
	<h1>Registro</h1>
	<form action="registrar_sql.php" method="POST">
		<label for="">Nombre De Usuario</label><br>
		<input type="text" name="nombre" required maxlength="30"><br>

		<label for="">Email</label><br>
		<input type="email" name="email" required maxlength="50"><br>

		<label for="">contraseña</label><br>
		<input type="password" name="pass" required maxlength="30" minlength="8"><br>

		<input type="submit" value="Enviar">
	</form>
	</div>
</center>
</body>
</html>


	


	