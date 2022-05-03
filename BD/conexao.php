<?php

$dsn = "mysql:host=localhost;dbname=system_supernac;charset=utf8";
$usuario = "root";
$senha = "";

try {

	$PDO = new PDO($dsn, $usuario, $senha);

	//echo "Conectado com sucesso!";
	
} catch(PDOException $erro){

	//echo "Ocorreu um erro!";
	//echo $erro->getMessage();
}


?>