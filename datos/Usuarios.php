<?php 
	class usuarios{
		public function registroUsuario($datos){
			$c=new conectar();
			$conexion=$c->conexion();

			$fecha=date('Y-m-d');

			$sql="INSERT into usuario(Nombres,
								ApellidoPaterno,
								ApellidoMaterno,
								NombreUsuario,
								Contrasenia,
								fechaRegistro)
						values ('$datos[0]',
								'$datos[1]',
								'$datos[2]',
								'$datos[3]',
								'$datos[4]',
								'$fecha')";
			return mysqli_query($conexion,$sql);
		}

        public function loginUser($datos){
			$c=new conectar();
			$conexion=$c->conexion();
			$password=sha1($datos[1]);

			$sql="SELECT * 
					from usuario 
				where NombreUsuario='$datos[0]'
				and Contrasenia='$password'";
			$result=mysqli_query($conexion,$sql);

			if(mysqli_num_rows($result) > 0){
				$_SESSION['usuario']=$datos[0];				
				$_SESSION['iduser']=self::traeID($datos);
				return 1;
			}else{
				return 0;
			}
		}

		public function traeID($datos){
			$c=new conectar();
			$conexion=$c->conexion();

			$password=sha1($datos[1]);

			$sql="SELECT IdUsuario 
					from usuario 
					where NombreUsuario='$datos[0]'
					and Contrasenia='$password'"; 
			$result=mysqli_query($conexion,$sql);

			return mysqli_fetch_row($result)[0];
		}
    }
?>