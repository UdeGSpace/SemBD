<?php
define("Host", 'localhost');
define("BD", 'uniformes');
define("User_BD", 'admin_sgresident');
define("Pass_BD", 'usuario1234');

	function conecta()
	{
		$con = new mysqli(Host, User_BD, Pass_BD, BD);
		$con->set_charset("utf8");
		if ($con->connect_error) {
			die("Error conectando al servidor de BD");
			exit();
		} else {
			echo "Conectado";
		}
		return $con;
	}
?>