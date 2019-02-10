<?php
session_start(); 
if(isset($_SESSION['userid'])==1){


 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>mantenimiento</title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="includes/estilos.css">
	<link rel="stylesheet" href="includes/modalestilos.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="includes/mensaje.js"></script>
<!--script>$(document).ready(function() {
   alert("jQuery esta funcionando !!");
 });</script-->
 <?php $tipo=$_COOKIE['tipo']; 
 ?>
</head>
<body style="
background: rgba(244,237,138,1);
background: -moz-linear-gradient(left, rgba(244,237,138,1) 0%, rgba(254,198,108,1) 100%);
background: -webkit-gradient(left top, right top, color-stop(0%, rgba(244,237,138,1)), color-stop(100%, rgba(254,198,108,1)));
background: -webkit-linear-gradient(left, rgba(244,237,138,1) 0%, rgba(254,198,108,1) 100%);
background: -o-linear-gradient(left, rgba(244,237,138,1) 0%, rgba(254,198,108,1) 100%);
background: -ms-linear-gradient(left, rgba(244,237,138,1) 0%, rgba(254,198,108,1) 100%);
background: linear-gradient(to right, rgba(244,237,138,1) 0%, rgba(254,198,108,1) 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f4ed8a', endColorstr='#fec66c', GradientType=1 );
" onload="mantenimiento('<?php echo $tipo; ?>')">
	<div class="container-fluid">
		<?php require('templates/header2.php'); ?>
		<div class="row" style="display:flex; align-items:center; justify-content:center; transform: translateY(10%);">
			<div  style="width:70%; height:80%; background:white; padding:15px; box-shadow:0px 2px 6px 0px black;">
				<div class="row" style="margin-bottom:10px;">
					<div class="col-lg-3">
						<label for="opcionmantenimiento">Elegir:</label>
						<select id="opcionmantenimiento" class="form-control" onchange="mantenimiento(this.value)" >
							<option value="<?php echo $tipo; ?>"></option>
							<option value="Grado">Grado</option>
							<option value="Alumno">Alumno</option>
							<option value="Encargado">Encargado</option>
						</select>
					</div>
				</div>
				<div class="row">
						<div class="col-lg-12" id="tablamantenimiento">
						
						</div>	
				</div>
			</div>
		</div>
	</div>
<?php include('includes/modales.php'); ?>	
<?php 
	}else{
		header('location: index.php');
	}
 ?>
</body>
</html>