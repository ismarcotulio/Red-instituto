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
			<div  style=" max-height:500px; width:70%; height:80%; background:white; padding:15px; box-shadow:0px 2px 6px 0px black; overflow:scroll;">
				<div class="row">
						<div class="col-lg-12" id="tablamantenimiento">
							<?php
							require('includes/conexion.php');
							$script='SELECT Id_Alumno,Nombre,Id_Grado,Descripcion FROM ALUMNO
							INNER JOIN GRADOo ON ALUMNO.Id_Grado=GRADOo.Id_Grado ORDER BY Descripcion DESC';
							$rslt=mysql_query($script,$conn);
							echo '	<form action="includes/addalumno.php" method="post" id="agregaralumno">
									<table class="table table-hover">
											<thead>
											<tr>
												<th>nombre</th>
												<th>Grado</th>
												<th></th>
												<th></th>
											</tr>
											</thead>
											<tbody>
											<tr>
											<th><input type="text" name="nombrealumno" class="form-control"></input></th>
											<th><select name="idgrado" class="form-control">';

											$script2="SELECT Id_Grado,Descripcion FROM GRADO";
											$rslt2=mysql_query($script2,$conn);
											while($row=mysql_fetch_array($rslt2,MYSQL_BOTH)){
												?>
												<option  value="<?php echo $row['Id_GRado']; ?>"><?php echo $row['Descripcion']; ?></option>
												<?php
											}

											echo '</select>
											</th>
											<th><input type="submit" style="width:90px;" class="btn btn-success" value="Agregar" id="botonalumno"></input></th>
											</tr></form>';
												while($row=mysql_fetch_array($rslt,MYSQL_BOTH)){
													?>
												<tr>
													<th>
														<?php echo $row['Nombre']; ?>
													</th>
													<th>
														<?php echo $row['Descripcion'];?>
													</th>
													<th>
														<form action="includes/eliminaralumno.php" method="post">
															<button type="submit" value="<?php echo $row['Id_Alumno']; ?>"  class="btn btn-danger" name="eliminaralumno">Eliminar</button>
														</form>
													</th>
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