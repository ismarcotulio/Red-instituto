<?php 
require('conexion.php');
$script="SELECT Id_Encargado FROM Encargado ORDER BY Id_Encargado DESC LIMIT 1";
$rslt=mysql_query($script,$conn);
if (!$rslt) {
    die('Consulta no válida: ' . mysql_error());
}
$array=mysql_fetch_array($rslt,MYSQL_BOTH);
$id=$array['Id_Encargado']+1;
$nombre=$_POST['nombreencargado'];
$idalumno=$_POST['idalumno'];
$correo=$_POST['correoencargado'];
$telefono=$_POST['telefonoencargado'];
$whatsapp=$_POST['whatsappencargado'];

$script2="INSERT INTO Encargado VALUES($id,'$nombre','$telefono','$correo','$whatsapp',$idalumno)";
$rslt2=mysql_query($script2,$conn);
setcookie('tipo','Encargado',time() + (86400 * 30), "/");
header('location:../mantenimiento.php');

 ?>