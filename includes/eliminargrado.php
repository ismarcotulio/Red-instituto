<?php 
require('conexion.php');

$id=$_POST['eliminargrado'];
$script="SELECT Id_Alumno FROM Alumno WHERE Id_Grado=$id";
$rslt=mysql_query($script,$conn);
while($row=mysql_fetch_array($rslt,MYSQL_BOTH)){
	$script2="DELETE FROM ENCARGADO WHERE Id_Alumno=$row[0]";
	$rslt2=mysql_query($script2,$conn);
}
$script3="DELETE FROM ALUMNO WHERE Id_Grado=$id";
$rslt3=mysql_query($script3,$conn);
if (!$rslt) {
    $mensaje  = 'Consulta no válida: ' . mysql_error() . "\n";
    $mensaje .= 'Consulta completa: ' . $consulta;
    die($mensaje);
}
$script4="DELETE FROM GRADO WHERE Id_Grado=$id";
$rslt4=mysql_query($script4,$conn);
setcookie('tipo','Grado',time() + (86400 * 30), "/");
header( "location: ../mantenimiento.php" ); 

 ?>