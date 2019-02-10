<!--p>
Mantenimiento de los grados de la Institucion.En el cual se podra agregar y eliminar.
Al eliminar un grado se borraran sus alumnos y encargados.
</p-->
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
							/*
							-creacion de la tabla en la cual se podra agregar un nuevo grado y eliminar de la base de datos.
							-Para ello primero se hace un select a la base de datos de los grados existentes y se insertan
								dinamicamente por medio de un ciclo. 
							*/
							require('includes/conexion.php');
							$script='SELECT Id_Grado,Descripcion FROM Grado ORDER BY Id_Grado';
							$rslt=mysql_query($script,$conn);
							//para agregar un grado este tendra que pasar por el proceso de addgrado el cual es una simple insercion a la base de datos.  
							echo '<form action="includes/addgrado.php" id="agregargrado" method="post">
									<table class="table table-hover">
										<thead>
											<tr>
												<th>nombre</th>
												<th></th>
												<th></th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<th>
													<input  name="grado" type="text" class="form-control"></input>
												</th>
												<th>
													<input class="btn btn-success" type="submit" id="botongrado" value="agregar"></input>
												</th>
												<div id="mascontenedor"></div>
											</tr>
											</form>
											';
											while($row=mysql_fetch_array($rslt,MYSQL_BOTH)){
												/*Al insertarse mediante el siguiente ciclo, cada grado contara con un
												boton de eliminacion unico por id.
												*/
											?>
											<tr>
												<th><?php echo $row['Descripcion'];?></th>
												<th><form action="includes/eliminargrado.php" method="post"><button name="eliminargrado" type="submit" value="<?php echo $row['Id_Grado']; ?>"  class="btn btn-danger" id="botoneliminargrado">eliminar</button></form></th>
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