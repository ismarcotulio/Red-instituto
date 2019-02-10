<?php 
include('conexion.php');

$descripcion=$_POST['grado'];
$instituto=1;
$script="SELECT Id_Grado FROM Grado ORDER BY Id_Grado DESC LIMIT 1";
$rslt=mysql_query($script,$conn);
if (!$rslt) {
    die('Consulta no válida: ' . mysql_error());
}
$array=mysql_fetch_array($rslt,MYSQL_BOTH);
$id=$array['Id_Grado']+1;
$script2="INSERT INTO GRADO (Id_Grado,Descripcion,Id_Colegio) VALUES('$id','$descripcion','$instituto')";
$rslt2=mysql_query($script2,$conn);
setcookie('tipo','Grado',time() + (86400 * 30), "/");
header("location: ../mantenimiento.php");
 ?>