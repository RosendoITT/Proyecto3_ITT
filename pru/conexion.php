<?php 
// conexion con la base d datos y el servidor 
$link = mysql_connect("localhost","root","") or die("<h2>No se encuentra el servidor</h2>");;
$db	= mysql_select_db("consultorio",$link) or die("<h2>Error de conexion</h2>");
// Obtenemos a continuacion los valores del formulario
$nombre=$_POST["Nombree"];
$direccion=$_POST["Direccionn"];
$edad=$_POST["Edadd"];
$ocupacion=$_POST["Ocupacionn"];
$motivo=$_POST["Motivoo"];
$duracion=$_POST["Duracionn"];
$pago=$_POST["Pagoo"];
$fecha=$_POST["FechaY"];
$hora=$_POST["horra"];



//Obtiene longitud de un string 
$req = (strlen($nombre)*strlen($direccion)*strlen($edad)*strlen($ocupacion)*strlen($motivo)*strlen($duracion)*strlen($pago)*strlen($fecha)*strlen($hora)) or die("No se ha llenado los campos");

// Ingresamos la informacion a la base de datos
mysql_query("INSERT INTO cita VALUES ('$nombre','$direccion','$edad','$ocupacion','$motivo','$duracion','$pago','$fecha','$hora')",$link)
?>