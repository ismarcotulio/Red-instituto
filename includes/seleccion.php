<?php
	require ('conexion.php');

	$tipo=$_GET['value'];
	if($tipo==1){
		$script='SELECT Id_Grado AS valor,Descripcion AS nombre FROM GRADO ORDER BY Id_Grado';
	}else{
		if($tipo==2) {
			$script='SELECT Id_Encargado AS id,Nombre AS nombre,Correo AS valor FROM ENCARGADO ORDER BY Id_Encargado';
		}
	}
	echo '<label for="seleccionar"></label>
			<dl class="box">
								<dt>
									<a href="#">
										<span class="hida">Seleccione una opcion</span>
										<p></p>
									</a>
								</dt>
								<dd>
									<div class="mutliselect" style="">
										<ul>
										';

	

	$resultado=mysql_query($script,$conn);
	while($fila=mysql_fetch_array($resultado,MYSQL_BOTH)){
		?>
		<li><input id="<?php echo $fila['nombre'];?>" type="checkbox" value="<?php echo $fila['valor']; ?>" name="valor[]"><label for="<?php echo $fila['id']; ?>"><?php echo $fila['nombre'];?></label></li>
		<?php
	}
	echo '</ul></div></dd></dl>';
	
?>