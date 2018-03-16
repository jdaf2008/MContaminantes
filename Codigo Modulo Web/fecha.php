<!DOCTYPE html>
<html>
<head>
	<title>Consulta por Nombre</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
	
	<link rel="stylesheet" type="text/css" href="estilos.css">

</head>
<body>

	<form action="fecha.php" method="post">


	<br>
	<br>
	<br>

	<h1>MOSTRAR DATOS DE LAS MEDIDAS POR FECHA</h1>

	<br>
	<br>
	<br>
	<br>

	<label> INGRESE LA FECHA A CONSULTAR </label>

	<br>

	<input type="text" name="fecha">

	<br>
	<br>

	<button type="submit" class="btn btn-primary btn"><i class="far fa-hand-point-right"></i> Consultar</button>

	</form>

	<br>
	<br>
	<br>
	<br>

	<?php 

	if (isset($_POST["fecha"])) {
		include ("conexion.php");

		$respuesta = $mysqli -> query("SELECT DIOXIDO , MONOXIDO , HUMEDAD , RUIDO , FECHA , HORA FROM datos WHERE FECHA like '".$_POST['fecha']."'") or die ("FALLO LA CONSULTA");

	while ($row = $respuesta -> fetch_assoc()) {
	 ?>

	<table align="center" width="800px"  class="table-bordered">
    <thead>
    <tr>

	 <th><label> Cantidad Dioxido de Carbono: <br> <?php echo $row['DIOXIDO'];?> <br> </label></th>
	 <th><label> Cantidad Monoxido de Carbono: <br> <?php echo $row['MONOXIDO'];?> <br> </label></th>
	 <th><label> Humedad: <br> <?php echo $row['HUMEDAD'];?> <br> </label></th>
	 <th><label> Ruido: <br> <?php echo $row['RUIDO'];?> <br> </label></th>
	 <th><label> Fecha: <br> <?php echo $row['FECHA'];?> <br> </label></th>
	 <th><label> Hora <br> <?php echo $row['HORA'];?> <br> </label></th>
	 
	 <th><a href="menu.php"><button type="submit"><img src="volver.png" width="40" height="40"></button></a></th>

    </tr>

    </thead>

	 <?php  

	}

	}

	?>

</body>
</html>