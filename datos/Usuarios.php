<?php 
	class usuarios{
        public function loginUser($datos){
			$c=new conectar();
			$conexion=$c->conexion();
			$password=sha1($datos[1]);

			$_SESSION['usuario']=$datos[0];
			$_SESSION['iduser']=self::traeID($datos);

			$sql="SELECT * 
					from usuarios 
				where email='$datos[0]'
				and password='$password'";
			$result=mysqli_query($conexion,$sql);

			if(mysqli_num_rows($result) > 0){
				return 1;
			}else{
				return 0;
			}
		}
    }
?>