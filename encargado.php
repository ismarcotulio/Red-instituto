<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>mantenimiento</title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="includes/estilos.css">
	<link rel="stylesheet" href="includes/modalestilos.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="includes/mensaje.js"></script>
</head>
<body style="background:#F1D59E;">
	<div class="container-fluid">
		<?php require('templates/header2.php'); ?>
		<div class="row" style="display:flex; align-items:center; justify-content:center; transform: translateY(10%);">
			<div  style=" max-height:500px; width:90%; height:80%; background:white; padding:15px; box-shadow:0px 2px 6px 0px black; overflow:scroll;">
				<div class="row">
						<div class="col-lg-12" id="tablamantenimiento">
							<?php
							require('includes/conexion.php');
							$script='SELECT Id_Encargado,ENCARGADO.Nombre AS encargado,ALUMNO.Nombre AS alumno,Telefono,Correo,Whatsapp,Id_Alumno,
			Descripcion FROM ENCARGADO
		INNER JOIN ALUMNO ON ENCARGADO.Id_Alumno=ALUMNO.Id_Alumno INNER JOIN GRADO
		ON ALUMNO.Id_Grado=GRADO.Id_Grado ORDER BY Descripcion DESC';
	$rslt=mysql_query($script,$conn);
	if (!$rslt) {
    die('Consulta no válida: ' . mysql_error());
}
	echo '	<form id="agregarencargado" action="includes/addencargado.php" method="post">
			<table class="table table-hover">
					<thead>
					<tr>
						<th>Nombre</th>
						<th>Telefono</th>
						<th>Correo</th>
						<th>Whatsapp</th>
						<th>Grado</th>
						<th>Alumno</th>
						<th></th>
						<th></th>
					</tr>
					</thead>
					<tbody>
					<tr>
						<th>
							<input type="text" class="form-control" name="nombreencargado"></input>
						</th>
						<th>
							<input type="text" class="form-control" name="telefonoencargado"></input>
						</th>
						<th>
							<input type="text" class="form-control" name="correoencargado"></input>
						</th>
						<th>
							<input type="text" class="form-control" name="whatsappencargado"></input>
						</th>
						<th>
							<select class="form-control" name="idgrado" onchange="gradoalumno(this.value)"><option></option>';
							$script2="SELECT Id_Grado,Descripcion FROM GRADO";
							$rslt2=mysql_query($script2,$conn);
							while($row=mysql_fetch_array($rslt2,MYSQL_BOTH)){
								?>
								<option value="<?php echo $row['Id_Grado']; ?>"><?php echo $row['Descripcion']; ?></option>

								<?php
							}

							echo '</select>
						</th>
						<th id="gradoalumno">
							
						</th>
						<th>
							<input type="submit" id="botonencargado" style="width:90px;" class="btn btn-success" value="Agregar"></input>
						</th>
					</tr></form>';
						while($row=mysql_fetch_array($rslt,MYSQL_BOTH)){
							?>
						<tr>
							<th><?php echo $row['encargado']; ?></th>
							<th><?php echo $row['col_telefono']; ?></th>
							<th><?php echo $row['col_correo']; ?></th>
							<th><?php echo $row['col_whatsapp'];?></th>
							<th><?php echo $row['col_descripcion'];?></th>
							<th><?php echo $row['alumno'];?></th>
							<th><form action="includes/eliminarencargado.php" method="post"><button type="submit" name="eliminarencargado" value="<?php echo $row['Id_Encargado']; ?>"  class="btn btn-danger">Eliminar</button></form></th>
						</tr>

						<?php
						}  
				echo '</tbody></table>';


 ?>
						</div>	
				</div>
			</div>
		</div>
	</div>
<?php include('includes/modales.php'); ?>	


</body>
</html>