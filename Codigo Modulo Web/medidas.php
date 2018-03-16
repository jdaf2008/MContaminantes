<!DOCTYPE html>
<html>
<head>
	<title>Medidas</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
	
	<link rel="stylesheet" type="text/css" href="estilos.css">

</head>
<body>

	<form action="medidas.php" method="post">


	<br>
	<br>
	<br>

	<h1>MOSTRAR DATOS DE LAS MEDIDAS</h1>

	<br>
	<br>
	<br>
	<br>

	<label> OPRIMA EL BOTON PARA VER LOS DATOS </label>

	<br>
	
	<button type="submit" name="enviar" class="btn btn-primary btn"><i class="far fa-hand-point-rights"> Oprima Aqui </i> </button>

	</form>

	<br>
	<br>
	<br>
	<br>
	
	<?php 
		if (isset($_POST["enviar"])) {
		include ("conexion.php");

		$respuesta = $mysqli -> query("SELECT DIOXIDO , MONOXIDO , HUMEDAD , RUIDO , FECHA , HORA FROM datos ") or die ("FALLO LA CONSULTA");

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