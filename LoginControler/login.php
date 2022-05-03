<?php
include "../BD/conexao.php";

$email = $_POST['email'];
$senha = $_POST['senha'];

$sql_login = "SELECT * FROM usuarios WHERE EMAIL='$email' AND SENHA='$senha'";
$dados = $PDO->query($sql_login);
$resultado = $dados->fetchAll(PDO::FETCH_ASSOC);

if($dados->rowCount() >= 1){

    foreach($resultado as $item){
        
        $id = $item['ID'];
        $nome = $item['NOME'];
        $cpf = $item['CPF'];
        $email = $item['EMAIL'];
        $tipo = $item['TIPO'];
        $foto = $item['FOTO'];

    }

        session_start();
        $_SESSION['NOME'] = $nome;
        $_SESSION['CPF'] = $cpf;
        $_SESSION['EMAIL'] = $email;
        $_SESSION['TIPO'] = $tipo;
        $_SESSION['FOTO'] = $foto;

        $dados = $tipo;

} else {
	    $dados = "NA";
};

echo json_encode($dados);

?>