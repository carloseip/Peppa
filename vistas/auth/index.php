<?php 	
	session_start();
    include_once "../layout/header.php";
	if(isset($_SESSION['usuario'])){
		
	header("location:../tables/data_tables.php");

	}else{
		?>
		<body style="background-color: white">
			<br><br><br>
			<div class="container">
				<div class="row">
					<div class="col-sm-4"></div>
					<div class="col-sm-4">
						<div class="panel panel-success">
							<div class="panel panel-heading">Peppa</div>
							<div class="panel panel-body">
								<p>
									<img src="../../dist/img/user.png" >
								</p>
								<form id="frmLogin">
									<label>Usuario</label>
									<input type="text" class="form-control input-sm" name="usuario" id="usuario">
									<label>Contraseña</label>
									<input type="password" name="password" id="password" class="form-control input-sm">
									<p></p>
									<span class="btn btn-primary btn-sm" id="entrarSistema">Entrar</span>
									<a href="registro.php" class="btn btn-danger btn-sm">Registrar</a>
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
				$('#entrarSistema').click(function(){
		
				vacios=validarFormVacio('frmLogin');
		
					if(vacios > 0){
						alert("Debes llenar todos los campos");
						return false;
					}
		
				datos=$('#frmLogin').serialize();
				$.ajax({
					type:"POST",
					data:datos,
					url:"../../controladoro/login.php",
					success:function(r){
						if(r==1){
							window.location="../tables/data_tables.php";
						}else{
							alert("No se pudo acceder :(");
						}
					}
				});
			});
			});
		</script>
		<?php 
	}
?>