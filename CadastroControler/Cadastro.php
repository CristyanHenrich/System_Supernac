<?php
include "../BD/conexao.php";

$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$tipo = "Cliente";

$foto_origem = $_FILES['foto']['tmp_name'];
$foto_destino = "";

//Query
$sql_insert = "INSERT INTO usuarios (NOME, CPF, EMAIL, SENHA, TIPO, FOTO) VALUES (:NOME, :CPF, :EMAIL, :SENHA, :TIPO, :FOTO)";

//Statements
$stmt = $PDO->prepare($sql_insert);

$stmt->bindParam(':NOME', $nome);
$stmt->bindParam(':CPF', $cpf);
$stmt->bindParam(':EMAIL', $email);
$stmt->bindParam(':SENHA', $senha);
$stmt->bindParam(':TIPO', $tipo);
$stmt->bindParam(':FOTO', $foto_destino);

if($stmt->execute()){

	$id = $PDO->lastInsertId();

	$foto_destino = "Usuarios/" . $id . "_" . time() . ".png";

	if(move_uploaded_file($foto_origem, $foto_destino)){

		$sql_update = "UPDATE usuarios SET FOTO=:foto WHERE ID=:id";

		$stmt = $PDO->prepare($sql_update);

		$stmt->bindParam(':foto', $foto_destino);
		$stmt->bindParam(':id', $id);

		$stmt->execute();

	}

	$dados = array("CREATE"=>"OK", "ID"=>$id, "FOTO"=>$foto_destino);
} else {
	$dados = array("CREATE"=>"ERRO");
};

echo json_encode($dados);
