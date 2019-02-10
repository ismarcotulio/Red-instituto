<?php 
include('includes/conexion.php');
$correo=$_POST['correo'];
$usuario=$_POST['usuario'];
$pass=$_POST['pass'];
$fecha=date("Y/m/d");
$instituto=1;


	$script='SELECT  Id_Registro FROM Registro ORDER BY Id_Registro DESC LIMIT 1';
$rslt=mysql_query($script,$conn);

if($rslt){
		$array=mysql_fetch_array($rslt,MYSQL_BOTH);
		$id=$array["Id_Registro"]+1;
	}else{
		$id=1;
	}


$script2="INSERT INTO REGISTRO(Id_Registro,Correo,Usuario,Pass,Id_Colegio,Fecha,Id_Cargo)
VALUES($id,'$correo','$usuario','$pass',$instituto,'$fecha',1)";
$rslt2=mysql_query($script2,$conn);	




if($rslt2===true){
	echo 'registro exitoso';
}else{
	echo 'registro erroneo';
}



 ?>