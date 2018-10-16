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
  <form action="conexion.php" method="POST">
  <header id="main-header">
    
    <a id="logo-header" href="#">
      <a href="http://127.0.0.1/prueba%20ter/"><span class="site-name">Regresar al menu</span></a>
 
  </header>


  </button>
  </div>
</nav>

<div class="container-fluid">
<h2 class="form-heading">Inserte datos del paciente</h2>
<div class="login-form">
<div class="main-div">
    <div class="panel">

   <p>Nombre del paciente</p>
   </div>
    <form id="Login" method="POST"><!-- En estas etiquetas te permite crear formularion para la insercion de datos para el cual ser haran los registros utilizando el method="POST"
                                    permitira que el codigo de php pueda tomas los datos de los formularioc y asi tomar las variables  para almacenarlos-->

        <div class="form-group">


            <input type="user" class="form-control" name="Nombree" placeholder="Rosendo Flores Zapata"required><!--con  la etiqueta "name" le pondran un nombre a cada formulario y asi poderlo utilizar mas adelante en php
                                                                                                  con $_POSR para que almacene los datos no olviden siempre ponerle el name y el nombre que quieran-->

        </div>
          <p>Ingrese direccion del paciente</p>
        <div class="form-group">

            <input type="user" class="form-control" name="Direccionn" placeholder="Calle Huexotila numero 67 San Juan Totolac Tlaxcala"required><br><!--Poner Texto a la casilla-->

        </div>

        <p>Ingrese edad del paciente </p>
        <div class="form-group">

            <input type="user" class="form-control" name="Edadd" placeholder="21 años "required><br><!--Poner Texto a la casilla-->

        </div>
        <p>Ingrese ocupación del paciente </p>
        <div class="form-group">

            <input type="user" class="form-control" name="Ocupacionn" placeholder="Profesor, Taxista, ETC"required><br><!--Poner Texto a la casilla-->

        </div>

<p>Ingrese motivo de consulta  </p>
        <div class="form-group">

            <input type="user" class="form-control" name="Motivoo" placeholder="Extracción de una pieza dental.. ETC"required><br><!--Poner Texto a la casilla-->

        </div>

        <p>Duracion aproximada de la consulta </p>
        <div class="form-group">

            <input type="user" class="form-control" name="Duracionn" placeholder="2 horas "required><br><!--Poner Texto a la casilla-->

        </div>


        <p>Fecha de la consulta </p>
        <div class="form-group">

            <input type="date" class="form-control" name="FechaY" placeholder="2 horas "required><br><!--Poner Texto a la casilla-->

        </div>


        <p>Hora de la consulta </p>
        <div class="form-group">

            <input type="user" class="form-control" name="horra" placeholder="2 horas "required><br><!--Poner Texto a la casilla-->

        </div>



        <div class="form-group">
            <p>Ingrese forma de pago</p>
            <select name="Pagoo">
               <option value="1">Efectivo</option> 
               <option value="2">Tarjeta</option> 
               <option value="3">cheque</option>
            </select>

        </div>
          

        </div>
        <a href="login.php"><button type="submit" class="btn btn-primary">Agregar nueva cita</button></a>

    </form>
    </div>
</div>
</div>
<?php
if($_POST){
  $u=$_POST['usuar'];//Guarda los datos insertados con los formularios para que asi se almacenen en la base de datos
  $p=$_POST['contras'];
  $link=mysqli_connect("localhost","root","");//Permite la conexion con el host local de xampp y asi poder seleccionar las bases de datos
    mysqli_select_db($link,"hii");// se selecciona la base de datos para que puedan seleccionar la tabla creada en la misma base de datos
    mysqli_query($link,"insert into hiii value ('$u','$p')");// esta se utiliza para consultas ya que permite la conexion con la cual se guardan los datos de los formularios ya que en la instrccion INSERT INTO el hiii indica el nombre de la tabla para que asi 
                                                            // se pueda guardar los datos y las variables $u y $p son los datos que se guardaran ya que se han tomado de los formularios
    mysqli_close($link);//Cierra, acaba o finaliza con la conexion en la base de datos en la cual se esta conectando ya que finaliza todas las tareas que se le dieron a las variables
}
?>
</html>
</body>
