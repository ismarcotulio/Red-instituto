<?php 
require('conexion.php');

$id=$_POST['eliminaralumno'];

$script="DELETE FROM Encargado WHERE Id_Alumno=$id";
$rslt=mysql_query($script,$conn);

$script2="DELETE FROM ALUMNO WHERE Id_Alumno=$id";
$rslt2=mysql_query($script2,$conn);
setcookie('tipo','Alumno',time() + (86400 * 30), "/");
 header( "location: ../mantenimiento.php" );

 

 ?>