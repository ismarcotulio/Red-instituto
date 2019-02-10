<div class="container-fluid" style="">
	<div class="modal fade" id="login" style="vertical-align:middle;">
		<div class="modal-dialog">
			<div class="modal-content">
				<form action="registro.php" method="post">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					    <h4 class="modal-title">Registrarse Aqui</h4>					
					</div>
					<div class="modal-body">
							<div class="row">
								<div class="col-lg-12">
									<label for="correo">Correo</label>
									<input type="text" id="correo" name="correo" class="form-control">
								</div>
							</div>
							<div class="row">
								<div class="col-lg-12">
									<label for="usuario">Usuario</label>
									<input type="text" id="usuario" name="usuario" class="form-control">
								</div>
							</div>
							<div class="row">
								<div class="col-lg-12">
									<label for="pass">Contraseña</label>
									<input type="password" id="pass" name="pass" class="form-control">
								</div>
						</div>
					</div>
					<div class="modal-footer">
						<button type="submit" class="btn btn-success" >Listo</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<div class="container">
	<div class="modal fade" id="sigin">
		<div class="modal-dialog">
			<div class="modal-content">
				<form action="includes/masalumno.php" method="post">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					    <h4 class="modal-title">Iniciar Sesion</h4>					
					</div>
					<div class="modal-body">
							<div class="row">
								<div class="col-lg-12">
									<label for="usuario">Usuario:</label>
									<input type="text" id="usuario" name="usuario" class="form-control">
								</div>
							</div>
							<div class="row">
								<div class="col-lg-12">
									<label for="pass">Contraseña:</label>
									<input type="password" id="pass" name="pass" class="form-control">
								</div>
							</div>
					</div>
					<div class="modal-footer">
						<button type="submit" class="btn btn-success" name="login">Listo</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<div class="container-fluid">
	<div class="modal fade" id="alerta">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Anuncio</h4>			
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="col-lg-12" id="anuncio">
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>