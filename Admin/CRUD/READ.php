<?php

include("../BD/conexao.php");

    //CONSULTA PRODUTOS
    $sql_read_produtos = "SELECT * FROM produtos";
    $dados = $PDO->query($sql_read_produtos);
    $rowProdutos = $dados->fetchAll(PDO::FETCH_ASSOC);

    //CONSULTA PESSOAS
    $sql_read_pessoas = "SELECT * FROM usuarios";
    $dados = $PDO->query($sql_read_pessoas);
    $rowPessoas = $dados->fetchAll(PDO::FETCH_ASSOC);

    //CONSULTA VENDAS
    $sql_read_vendas = "SELECT * FROM vendas";
    $dados = $PDO->query($sql_read_vendas);
    $rowVendas = $dados->fetchAll(PDO::FETCH_ASSOC);

?>