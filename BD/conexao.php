<?php

$dsn = "mysql:host=172.106.0.115;dbname=system_supernac;charset=utf8";
$usuario = "supernac";
$senha = "projetosupernacsl123.";

try {

	$PDO = new PDO($dsn, $usuario, $senha);

	//echo "Conectado com sucesso!";
	
} catch(PDOException $erro){

	//echo "Ocorreu um erro!";
	//echo $erro->getMessage();
}


?>