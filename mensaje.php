<?php 
	session_start();
	if(isset($_SESSION['userid'])){


 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Inicio</title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="includes/estilos.css">
	<link rel="stylesheet" href="includes/modalestilos.css">
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
">
	<div class="container-fluid" >
		<?php include('templates/header2.php'); ?>
		<div class="row" style="display:flex; align-items:center; justify-content:center; transform: translateY(10%);">
			<div style="width:70%; height:80%; background:white; padding:15px; box-shadow:0px 2px 6px 0px black;">
				<form action="includes/accionmensaje.php" method="post" id="formulariomensaje">
					<div class="row">
						<div class="col-lg-4">
							<label for="tipo">tipo:</label>
							<select name="tipo" id="tipo" class="form-control" onchange="seleccion(this.value)">
								<option value=""></option>
								<option value="1">Grupal</option>
								<option value="2">Individual</option>
							</select>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6" id="seleccion">
								
						</div>
					</div>
					<div class="row" style="margin-top:10px;">
						<div class="col-lg-12">
							<label for="mensaje">mensaje:</label>
							<textarea name="mensaje" id="mensaje" cols="30" rows="5" class="form-control" style="margin-bottom:10px; "></textarea>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-3">
							<input type="submit" id="enviar" value="enviar" class="btn btn-success">	
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	<?php include('includes/modales.php'); ?>
	<?php 
		}else{
			header('location: index.php');
		}
	 ?>	
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="includes/mensaje.js"></script>
</body>
</html>