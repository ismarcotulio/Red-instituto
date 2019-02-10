<?php 

class gregg{
	public function tipo($valor){

include('conexion.php');
echo '<div class="table-responsive" style=" overflow:scroll;  max-height:500px; height:100%;">';
if($valor==='Grado'){
	$script='SELECT col_idgrado,col_descripcion FROM tbl_grado ORDER BY col_idgrado';
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
							<input  name="grado" type="text" class="form-control"></input>
						</th>
						<th>
							<input class="btn btn-success" type="submit" id="botongrado" value="agregar"></input>
						</th>
						<th>
							<input onclick="masalumno()" type="button" style="width:50px;" class="btn btn-info" id="masalumno" type="button" value="+"></input>
						</th>
						<div id="mascontenedor"></div>
					</tr>

					';
						while($row=mysql_fetch_array($rslt,MYSQL_BOTH)){
							?>
						<tr>
							<th><?php echo $row['col_descripcion'];?></th>
							<th style="margin-right:0px;"><button type="button" value="<?php echo $row['col_idgrado']; ?>" onclick="modificar(this.value)" class="btn btn-warning">modificar</button></th>
							<th><button type="button" value="<?php echo $row['col_idgrado']; ?>" onclick="eliminar(this.value)" class="btn btn-danger">eliminar</button></th>
						</tr>

						<?php
						}  
				echo '</tbody></table></form>';
	

}else{
	if($valor==='Alumno'){
		$script='SELECT col_idalumno,col_nombre,tbl_grado_col_idgrado,col_descripcion FROM tbl_alumno
		INNER JOIN tbl_grado ON tbl_alumno.tbl_grado_col_idgrado=tbl_grado.col_idgrado ORDER BY col_descripcion DESC';
	$rslt=mysql_query($script,$conn);
	echo '	
			<table class="table table-hover">
					<thead>
					<tr>
						<th>nombre</th>
						<th>Grado</th>
						<th></th>
						<th></th>
					</tr></thead><tbody><tr><th><input type="text" class="form-control"></input></th>
					<th><input type="text" class="form-control"></input></th><th><input style="width:90px;" class="btn btn-success" value="Agregar"></input></th></tr>';
						while($row=mysql_fetch_array($rslt,MYSQL_BOTH)){
							?>
						<tr>
							<th><?php echo $row['col_nombre']; ?></th>
							<th><?php echo $row['col_descripcion'];?></th>
							<th><button value="<?php echo $row['col_idalumno']; ?>" onclick="modificar(this.value)" class="btn btn-warning">Modificar</button></th>
							<th><button value="<?php echo $row['col_idalumno']; ?>" onclick="eliminar(this.value)" class="btn btn-danger">Eliminar</button></th>
						</tr>

						<?php
						}  
				echo '</tbody></table>';

	}else{
		if($valor==='Encargado'){
			$script='SELECT col_idencargado,tbl_encargado.col_nombre AS encargado,tbl_alumno.col_nombre AS alumno,col_telefono,col_correo,col_whatsapp,tbl_alumno_col_idalumno,
			col_descripcion FROM tbl_encargado
		INNER JOIN tbl_alumno ON tbl_encargado.tbl_alumno_col_idalumno=tbl_alumno.col_idalumno INNER JOIN tbl_grado
		ON tbl_alumno.tbl_grado_col_idgrado=tbl_grado.col_idgrado ORDER BY col_descripcion DESC';
	$rslt=mysql_query($script,$conn);
	if (!$rslt) {
    die('Consulta no válida: ' . mysql_error());
}
	echo '	
			<table class="table table-hover">
					<thead>
					<tr>
						<th>Nombre</th>
						<th>Telefono</th>
						<th>Correo</th>
						<th>Whatsapp</th>
						<th>Alumno</th>
						<th>Grado</th>
						<th></th>
						<th></th>
					</tr></thead><tbody><tr><th><input type="text" class="form-control"></input></th>
					<th><input type="text" class="form-control"></input></th><th><input type="text" class="form-control"></input></th>
					<th><input type="text" class="form-control"></input></th><th><input type="text" class="form-control"></input></th>
					<th><input type="text" class="form-control"></input></th><th><input style="width:90px;" class="btn btn-success" value="Agregar"></input></th></tr>';
						while($row=mysql_fetch_array($rslt,MYSQL_BOTH)){
							?>
						<tr>
							<th><?php echo $row['encargado']; ?></th>
							<th><?php echo $row['col_telefono']; ?></th>
							<th><?php echo $row['col_correo']; ?></th>
							<th><?php echo $row['col_whatsapp'];?></th>
							<th><?php echo $row['alumno'];?></th>
							<th><?php echo $row['col_descripcion'];?></th>
							<th><button value="<?php echo $row['col_idencargado']; ?>" onclick="modificar(this.value)" class="btn btn-warning">Modificar</button></th>
							<th><button value="<?php echo $row['col_idencargado']; ?>" onclick="eliminar(this.value)" class="btn btn-danger">Eliminar</button></th>
						</tr>

						<?php
						}  
				echo '</tbody></table>';


		}
	}
}

echo '</div>';

}
}
 ?>