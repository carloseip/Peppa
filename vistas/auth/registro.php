<?php
  include_once "../layout/header.php";
?>

<body style="background-color: white">
	<br><br><br>
	<div class="container">
		<div class="row">
			<div class="col-sm-4"></div>
			<div class="col-sm-4">
				<div class="panel panel-warning">
					<div class="panel panel-heading">Registrar Usuario</div>
					<div class="panel panel-body">
						<form id="frmRegistro">
							<label>Nombre</label>
							<input type="text" class="form-control input-sm" name="nombre" id="nombre">
							<label>Apellido Paterno</label>
							<input type="text" class="form-control input-sm" name="apellidop" id="apellidop">
							<label>Apellido Materno</label>
							<input type="text" class="form-control input-sm" name="apellidom" id="apellidom">
							<label>Nombre de Usuario</label>
							<input type="text" class="form-control input-sm" name="usuario" id="usuario">
							<label>Contraseña</label>
							<input type="password" class="form-control input-sm" name="password" id="password">
							<p></p>
							<span class="btn btn-primary" id="registro">Registrar</span>
							<a href="index.php" class="btn btn-default">Regresar</a>
						</form>
					</div>
				</div>
			</div>
			<div class="col-sm-4"></div>
		</div>
	</div>
</body>

<script type="text/javascript">
	$(document).ready(function(){
		$('#registro').click(function(){

			vacios=validarFormVacio('frmRegistro');

			if(vacios > 0){
				alert("Debes llenar todos los campos!!");
				return false;
			}

			datos=$('#frmRegistro').serialize();
			$.ajax({
				type:"POST",
				data:datos,
				url:"../../controlador/registrar.php",
				success:function(r){
					if(r==1){
						alert("Agregado con exito");
						$.ajax({
							type:"POST",
							data:datos,
							url:"../../controlador/login.php",
							success:function(r){
								if(r==1){									
							        window.location="../tables/data_tables.php";
								}else{
									alert("No se pudo acceder :(");
								}
							}
						});
					}else{
						alert("Fallo al agregar :(");
					}
				}
			});
		});
	});
</script>

