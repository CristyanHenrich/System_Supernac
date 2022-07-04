<?php require_once("./vendor/header.php"); ?>
<?php require_once("../BD/conexao.php"); ?>

<?php

$categoria = $_GET['categoria'];

$sql_search = "SELECT * FROM produtos WHERE CATEGORIA=:CATEGORIA";

//$sql_search = "SELECT * FROM produtos";

$stmt = $PDO->prepare($sql_search);

$stmt->bindParam(':CATEGORIA', $categoria);

$stmt->execute();

?>

<style>
.Categorias {
    width: 100%;
    height: 40px;
    background-color: #FF8900;

    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    justify-content: center;
    align-items: center;
    align-content: center;
    gap: 30px;
}

.Categorias h6 {
    width: 100px;
    height: 40px;
    font-size: 18px;
    font-weight: 400;
    color: #FFFFFF;

    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    justify-content: center;
    align-items: center;
    align-content: center;
    margin: 0;
}

.Categorias h6 a {
    text-decoration: none;
    color: white;
}

.Categorias h6 a:hover {
    background-color: #FFFFFF;
    color: #FF8900;
}
</style>

<htmL>

<div class="Categorias">
    <h6><a href="filtro.php?categoria=Alimentos">Alimentos</a></h6>
    <h6><a href="filtro.php?categoria=Bebidas">Bebidas</a></h6>
    <h6><a href="filtro.php?categoria=Acogue">Acogue</a></h6>
    <h6><a href="filtro.php?categoria=Mercearia">Mercearia</a></h6>
    <h6><a href="filtro.php?categoria=Eletronicos">Eletronicos</a></h6>
    <h6><a href="filtro.php?categoria=Informatica">Informatica</a></h6>
</div>

</htmL>

<?php

if($stmt->rowCount() >= 1){

while ($p = $stmt->fetch(PDO::FETCH_OBJ)) {
	
	$resultado[] = array("BASE"=>"VALIDA", "id"=>$p->ID, "nome"=>$p->NOME, "descricao"=>$p->DESCRICAO, "categoria"=>$p->CATEGORIA, "oferta"=>$p->OFERTA, "quantidade"=>$p->QUANTIDADE, "preco"=>$p->PRECO, "foto"=>$p->FOTO);
};

} else {

    $resultado = array("BASE"=>"INVALIDA");

}
$dados 
$dados = json_decode($resultado, true);

foreach($dados['results']['forecast'] as $dat) {
    echo 'teste: ' .$dat['id']. ' - ';
    echo 'teste: ' .$dat['nome']. ' - ';
    echo 'teste: ' .$dat['descricao']. '<br>';
}



?>