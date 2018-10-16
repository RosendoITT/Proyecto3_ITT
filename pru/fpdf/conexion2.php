<?php
$mysqli = new mysqli("localhost","root","","consultorio");
	if(mysqli_connect_errno()){
		echo 'Conexion Fallida : ', mysqli_connect_error();
		exit();
	}
?>
