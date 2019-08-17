<?php 
	require_once "../../datos/conexionBD.php";
	require_once "../../datos/Usuarios.php";

	$obj= new usuarios();

	$pass=sha1($_POST['password']);
	$datos=array(
		$_POST['nombre'],
		$_POST['apellidop'],
		$_POST['apellidom'],
		$_POST['usuario'],
		$pass
	);
	echo $obj->registroUsuario($datos);
 ?>