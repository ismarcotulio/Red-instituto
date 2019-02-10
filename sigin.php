<?php 
include('includes/conexion.php');
$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];
$fecha=date("Y/m/d");


$script2="SELECT Id_Registro FROM REGISTRO WHERE '$usuario'=Usuario OR Correo AND Pass='$contraseña'";
$rslt2=mysql_query($script2,$conn);
	$row=mysql_fetch_array($rslt2,MYSQL_BOTH);
	$registro=$row['Id_Registro'];
	if($registro){
		$script='SELECT Id_Login FROM LOGIN ORDER BY Id_Login DESC LIMIT 1';
			$rslt=mysql_query($script,$conn);

			if($rslt){
				$row=mysql_fetch_array($rslt,MYSQL_BOTH);
				$id=$row['Id_Login']+1;
			}else{
				$id=1;
			}
		$script3="INSERT INTO LOGIN(Id_Login,Fecha,Id_Registro)
		 VALUES($id,'$fecha',$registro)";
		 $rslt3=mysql_query($script3,$conn);
		/* echo 'bienvenido '.$usuario;*/


	}else{
		echo 'usuario o contraseña incorrectos';
	}

	/*echo $id;
	echo '<br>';
	echo $usuario;
	echo '<br>';
	echo $contraseña;
	echo '<br>';
	echo $fecha;
	echo '<br>';
	echo $registro;*/
 ?>