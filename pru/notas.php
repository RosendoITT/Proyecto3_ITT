<?php 
$conexion=mysqli_connect('localhost','root','','consultorio');
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Nuevos P</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="estilos.css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</head>
<body background="fondocliente.jpg">
  <header id="main-header">
    
    <a id="logo-header" href="#">
      <a href="http://127.0.0.1/prueba%20ter/"><span class="site-name">Regresar al menu</span></a>
 
  </header>


  </button>
  </div>
</nav>
	<link rel="stylesheet" type="text/css" href="estilodenotas.css">
	<br>
	<div style="text-align:center; ">
		<br><br><br><br><br>

		<table border="4"   style="margin: auto;" >
		<tr>
		<td>NOTAS</td>
	</div>
		</tr>

		<?php
		$sql="SELECT * FROM nota";
		$result=mysqli_query($conexion,$sql);

		while($mostrar=mysqli_fetch_array($result)){
	
		?>
	
		<tr>
		<td><?php echo $mostrar['Notas']?> </td>
		
		</tr>
	
		<?php
		}
		?>
		</table>



</body>
</html>