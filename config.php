<?php
	
	$localhost = true;
	//$localhost = false;
	
	if($localhost)
	{
		// **********************************************
		// localhost
		// **********************************************
		$server   = "127.0.0.1";
		$database = "pontuaweb";
		$username = "root";
		$senha    = "";

		$con = mysqli_connect($server, $username, $senha, $database);
		if (!$con) {
			die("Connection failed: " . mysqli_connect_error());
		}
	}
	else 
	{
		// **********************************************
		// servidor
		// **********************************************
		$usuario 	= 'id20524370_root';
		$senha 		= 'Bbm@2214052023';
		$database 	= 'id20524370_pontuaweb';
		$host 		= "localhost";
		

		$con = mysqli_connect($host, $usuario, $senha, $database);
		if (!$con) {
			die("Connection failed: " . mysqli_connect_error());
		}
	}

?>
