<?php
	
	//servidor, usuario de base de datos, contraseña del usuario, nombre de base de datos

    define('hostname', 'localhost');
    define('user', 'root');
    define('pass', '');
    define('db', 'bd_school');
	
    $mysqli = new mysqli(hostname,user,pass,db);
   

	
	
?>