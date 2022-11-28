<?php
define("Host", '127.0.0.1');
define("BD", 'Uniformes');
define("User_BD", 'root');
define("Pass_BD", '070519');

	function conecta(){
		$con = new mysqli(Host,User_BD,Pass_BD,BD);
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