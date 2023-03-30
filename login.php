<?php
	session_start();
	include('config.php');		
	
	$usuario = mysqli_real_escape_string($con,$_POST['usuario']);
	$senha   = mysqli_real_escape_string($con,$_POST['senha']);	
	
	$query  = "SELECT email, senha FROM usuarios WHERE email = '$usuario' AND senha = '$senha'";
	$result = mysqli_query($con, $query);
	$row    = mysqli_num_rows($result);
	
	if($row == 1) {
		$_SESSION['usuario'] = $usuario;
		header('Location: agentes.php');
		exit();
	} else {
		$_SESSION['nao_autenticado'] = true;
		header('Location: ./');
		exit();
	}
?>
