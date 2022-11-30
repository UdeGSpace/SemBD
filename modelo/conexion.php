<?php
define("Host", 'localhost');
define("BD", 'Uniformes');
define("User_BD", 'root');
define("Pass_BD", 'samir');

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
