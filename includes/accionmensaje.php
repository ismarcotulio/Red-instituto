<?php 
require('conexion.php');


$valor=$_POST['valor'];
$contador=count($valor);
//echo 'el contador es'.$contador.'<br>';
	
	if(is_numeric($valor[0])){
		for($i=0; $i < $contador ; $i++) { 
			$fila=$valor[$i];
			//echo 'el numero de grado es: '.$valor[$i].'<br>';
			$script="SELECT Id_Alumno FROM ALUMNO WHERE Id_Grado='$fila'";
			$rslt=mysql_query($script,$conn);
			while ($row = mysql_fetch_array($rslt, MYSQL_BOTH)) {
				//echo 'alumno id: '.$row[0].'<br>';
		    	$script2="SELECT Correo FROM Encargado WHERE Id_Alumno='$row[0]'";
		    	$rslt2=mysql_query($script2,$conn);
		    	while ($row2 = mysql_fetch_array($rslt2, MYSQL_BOTH)) {
		    	//echo 'encargado correo: '.$row2[0].'<br>';
		    	$arraycorreo[]=$row2[0];
		    	
				}
			}
		
		}
		
	}else{
		for ($i=0; $i < $contador; $i++) { 
			$arraycorreo[]=$valor[$i];
		}
	}
include("../vendor/autoload.php");
$mensaje=$_POST['mensaje'];

$smtp=new PHPMailer();
$smtp->IsSMTP();

$smtp->CharSet="UTF-8";
$smtp->SMTPAuth   = true;
$smtp->SMTPSecure = "tls";
$smtp->Host       = "smtp.gmail.com";
$smtp->Username   = "tulio1314@gmail.com";
$smtp->Password   = "paladino123";
$smtp->Port       = 587;

$smtp->From       = "tulio1314@gmail.com"; 
$smtp->FromName   = "Marco";
$smtp->AddAddress("marcotrq7@gmail.com", "Marco");

$contenidoHTML="<body>$mensaje</body>";

$smtp->MsgHTML($contenidoHTML);
foreach ($arraycorreo as $nombre => $correo) {
	$smtp->AddAddress($correo,$nombre);
}

if(!$smtp->Send())
    {
        echo "<br>Error : ".$smtp->ErrorInfo;
    }else{
        echo "<script>alert('el mensaje se a enviado exitosamente');</script>";
    }


 ?>