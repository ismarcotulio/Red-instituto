<?php 
require('conexion.php');

$idgrado=$_GET['value'];
$script="SELECT Id_Alumno,Nombre FROM Alumno WHERE Id_Grado=$idgrado";
$rslt=mysql_query($script,$conn);
echo '<select class="form-control" name="idalumno">';
while($row=mysql_fetch_array($rslt,MYSQL_BOTH)){
	?>
	<option value="<?php echo $row['Id_Alumno']; ?>"><?php echo $row['Nombre']; ?></option>
	<?php
}
echo '</select>'
 ?>