<?php 
	session_start();
	require_once "../datos/conexionBD.php";
	require_once "../datos/Usuarios.php";

	$obj= new usuarios();

	$datos=array(
		$_POST['usuario'],
	    $_POST['password']
	);
	echo $obj->loginUser($datos);
 ?>