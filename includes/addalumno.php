<?php 
require('conexion.php');
$script="SELECT Id_Alumno FROM ALUMNO ORDER BY Id_Alumno DESC LIMIT 1";
$rslt=mysql_query($script,$conn);
if (!$rslt) {
    die('Consulta no válida: ' . mysql_error());
}
$array=mysql_fetch_array($rslt,MYSQL_BOTH);
$id=$array['Id_Alumno']+1;
$nombre=$_POST['nombrealumno'];
$idgrado=$_POST['idgrado'];

$script2="INSERT INTO ALUMNO VALUES($id,'$nombre',$idgrado)";
$rslt2=mysql_query($script2,$conn);
setcookie('tipo','Alumno',time() + (86400 * 30), "/");
header('location: ../mantenimiento.php');
 ?>