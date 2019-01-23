<?php
	function conexao(){
		$banco 	 = "arca";
		$usuario = "root";
		$senha	 = "";
		$hostname= "localhost";

		$mysqli  = new mysqli($hostname, $usuario, $senha, $banco);

		if ($mysqli->connect_errno) {
			printf("Erro de conexao: %s", $mysqli->connect_error);
			exit;
		}
		return $mysqli;
	}
?>