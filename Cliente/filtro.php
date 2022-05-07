<?php require_once("./vendor/header.php"); ?>
<?php require_once("../BD/conexao.php"); ?>

<?php
$categoria = $_GET["categoria"];

$sth = $PDO->prepare("SELECT * FROM produtos WHERE CATEGORIA = :categoria");
$sth->bindParam('categoria', $categoria);
$sth->execute();
$data = $sth->fetchAll();

foreach ($data as $dat) {  ?>

<div class="destaques">
    <img src="../STORAGE/<?php echo $dat['FOTO'] ?>" alt="Produto 1">
    <p> <?php echo $dat['DESCRICAO'] ?> </p>
    <p class="preco"> R$ <?php echo $dat['PRECO'] ?> </p>
</div>

<?php } ?>