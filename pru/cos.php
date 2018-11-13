<?php 
// conexion con la base d datos y el servidor 
$link = mysql_connect("localhost","root","") or die("<h2>No se encuentra el servidor</h2>");;
$db	= mysql_select_db("consultorio",$link) or die("<h2>Error de conexion</h2>");
// Obtenemos a continuacion los valores del formulario
$nota=$_POST["Nota"];




//Obtiene longitud de un string 
$req = (strlen($nota)* or die("No se ha llenado los campos");

// Ingresamos la informacion a la base de datos
mysql_query("INSERT INTO nota VALUES ('$Nota')",$link)