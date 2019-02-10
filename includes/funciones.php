<?php 
function validar_login($usuario,$pass,&$resultado){
	include('conexion.php');
	$script="SELECT * FROM REGISTRO WHERE Correo OR Usuario ='$usuario' AND Pass='$pass'";
	$rslt=mysql_query($script,$conn);
	$count=0;
	while($row=mysql_fetch_object($rslt)){
		$count++;
		$resultado=$row;
	}
	if($count==1){
		return 1;
	}else{
		return 0;
	}
}
 ?>