<?php
include "../../BD/conexao.php";

$nome = $_POST['nome'];
$descricao = $_POST['descricao'];
$categoria = $_POST['categoria'];
$oferta = $_POST['oferta'];;
$quantidade = $_POST['quantidade'];
$preco = $_POST['preco'];

$foto_origem = $_FILES['foto']['tmp_name'];
$foto_destino = "";

//Query
$sql_insert = "INSERT INTO produtos (NOME, DESCRICAO, CATEGORIA, OFERTA, QUANTIDADE, PRECO, FOTO) VALUES (:NOME, :DESCRICAO, :CATEGORIA, :OFERTA, :QUANTIDADE, :PRECO, :FOTO)";

//Statements
$stmt = $PDO->prepare($sql_insert);

$stmt->bindParam(':NOME', $nome);
$stmt->bindParam(':DESCRICAO', $descricao);
$stmt->bindParam(':CATEGORIA', $categoria);
$stmt->bindParam(':OFERTA', $oferta);
$stmt->bindParam(':QUANTIDADE', $quantidade);
$stmt->bindParam(':PRECO', $preco);
$stmt->bindParam(':FOTO', $foto_destino);

if($stmt->execute()){

	$id = $PDO->lastInsertId();

	$foto_destino = "../../STORAGE/Produtos/" . $id . "_" . time() . ".png";

	if(move_uploaded_file($foto_origem, $foto_destino)){

		$sql_update = "UPDATE produtos SET FOTO=:foto WHERE ID=:id";

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

?>