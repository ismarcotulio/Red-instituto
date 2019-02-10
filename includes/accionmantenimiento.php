<!--p>
	El siguiente script es una modificacion del mantenimiento de grado,alumno y encargado 
	en una sola pagina mediante ajax.
</p-->
<?php 
$valor=$_GET['value'];

include('conexion.php');
echo '<div class="table-responsive" style=" overflow:auto;  max-height:400px; height:100%;">';
if($valor==='Grado'){
	$script='SELECT Id_Grado,Descripcion FROM Grado ORDER BY Id_Grado';
	$rslt=mysql_query($script,$conn);
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
							<input  name="grado" onkeydown="buscar(this.value)" type="text" class="form-control"></input>
						</th>
						<th>
							<input class="btn btn-success" type="submit" id="botongrado" value="agregar"></input>
						</th>
					</tr>
					<div id="buscar"></div>

					';
						while($row=mysql_fetch_array($rslt,MYSQL_BOTH)){
							?>
						<tr>
							<th><?php echo $row['Descripcion'];?></th>
							<th><form action="includes/eliminargrado.php" method="post"><button name="eliminargrado" type="submit" value="<?php echo $row['Id_Grado']; ?>"  class="btn btn-danger" id="botoneliminargrado">eliminar</button></form></th>
						</tr>

						<?php
						}  
				echo '</tbody></table></form>';
	

}else{
	if($valor==='Alumno'){
		$script='SELECT Id_Alumno,Nombre,ALUMNO.Id_Grado,Descripcion FROM ALUMNO
							INNER JOIN GRADO ON ALUMNO.Id_Grado=GRADO.Id_Grado ORDER BY Descripcion DESC';
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

											$script2="SELECT Id_Grado,Descripcion FROM Grado";
											$rslt2=mysql_query($script2,$conn);
											while($row=mysql_fetch_array($rslt2,MYSQL_BOTH)){
												?>
												<option  value="<?php echo $row['Id_Grado']; ?>"><?php echo $row['Descripcion']; ?></option>
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

	}else{
		if($valor==='Encargado'){
			$script='SELECT Id_Encargado,ENCARGADO.Nombre AS encargado,ALUMNO.Nombre AS alumno,Telefono,Correo,Whatsapp,ALUMNO.Id_Alumno,
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
							<th><?php echo $row['Telefono']; ?></th>
							<th><?php echo $row['Correo']; ?></th>
							<th><?php echo $row['Whatsapp'];?></th>
							<th><?php echo $row['Descripcion'];?></th>
							<th><?php echo $row['alumno'];?></th>
							<th><form action="includes/eliminarencargado.php" method="post"><button type="submit" name="eliminarencargado" value="<?php echo $row['Id_Encargado']; ?>"  class="btn btn-danger">Eliminar</button></form></th>
						</tr>

						<?php
						}  
				echo '</tbody></table>';


		}
	}
}

echo '</div>';



 ?>

