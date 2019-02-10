<?php 
require('conexion.php');

$id=$_POST['eliminarencargado'];

$script="DELETE FROM ENCARGADO WHERE Id_Encargado=$id";
$rslt=mysql_query($script,$conn);
setcookie('tipo','Encargado',time() + (86400 * 30), "/");
 header( "location: ../mantenimiento.php" );
 ?>
