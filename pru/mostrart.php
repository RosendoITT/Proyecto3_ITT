<?php 
$conexion=mysqli_connect('localhost','root','','consultorio');
?>
<!DOCTYPE>
<html>

	<meta charset="UTF-8">
	<title>Nuevos P</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="estilos.css">
  <link rel="stylesheet" type="text/css" href="estilodeclientes.css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</head>
<body background="fondocliente.jpg">
  <form action="conexion.php" method="POST">
  <header id="main-header">
    
    <a id="logo-header" href="#">
      <a href="http://127.0.0.1/prueba%20ter/"><span class="site-name">Regresar al menu</span></a>
 
  </header>


  </button>
  </div>
</nav>

	<title></title>
</head>
<body>
	<br>
	<div style="text-align:center; ">
		<br><br><br><br><br>

		<table border="10"   style="margin: auto;" >

		<tr>
		<th>Nombre</th>
		<th>Direccion</th>
		<th>Edad</th>
		<th>Ocupacion</th>
		<th>Motivo</th>
		<th>Duracion</th>
		<th>Pago</th>
		<th>Fecha</th>
		<th>Hora</th>
	</tr>
	<?php
	$sql="SELECT * FROM cita";
	$result=mysqli_query($conexion,$sql);

	while($mostrar=mysqli_fetch_array($result)){
	?>
	<tr>
		<td><?php echo $mostrar['Nombre']?></td>
		<td><?php echo $mostrar['Direccion']?></td>
		<td><?php echo $mostrar['Edad']?></td>
		<td><?php echo $mostrar['Ocupacion']?></td>
		<td><?php echo $mostrar['Motivo']?></td>
		<td><?php echo $mostrar['Duracion']?></td>
		<td><?php echo $mostrar['Pago']?></td>
		<td><?php echo $mostrar['FechaYHora']?></td>
		<td><?php echo $mostrar['Hora']?></td>

	</tr>	
	<?php
	}
	?>
	</table>


</body>
</html>