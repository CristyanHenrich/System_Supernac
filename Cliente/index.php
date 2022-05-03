<?php require_once("./vendor/header.php"); ?>
<?php require_once("../BD/conexao.php"); ?>

<?php
$sth = $PDO->prepare("SELECT * FROM produtos LIMIT 3");
$sth->execute();
$data = $sth->fetchAll();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Supernac</title>
</head>

<style>
.slider {
    margin-top: 50px;
    margin-bottom: 50px;
}

#CNP {
    width: 100%;
    height: 400px;
    background-color: #FF8900;
}

#AP {
    margin-top: 50px;
}

#AP h1{
  margin: 50px;
}

.destaques img {
    width: 150px;
    height: 160px;
    margin-top: 20px;
}

.destaques {
    display: column;
    flex-direction: column;
    flex-wrap: nowrap;
    justify-content: center;
    background-color: white;
    width: 250px;
    height: 350px;
    box-shadow: rgb(0 0 0 / 35%) 0px 5px 15px;
    display: flex;
    align-items: center;
}

#OP {
    display: flex;
    flex-direction: colum;
    flex-wrap: nowrap;
    align-content: center;
    justify-content: space-around;
    align-items: center;
}
}
</style>

<body>

    <div class="slider">

        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="./img/Pagina/Slider.png" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="./img/Pagina/Slider.png" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="./img/Pagina/Slider.png" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

    </div>


    <div id="CNP" class="conteudo">

        <section class="container">

        </section>

    </div>


    <div id="AP" class="produtos">

    <h1>Alguns Produtos</h1>

        <section id="OP" class="container">

            <?php foreach ($data as $dat) { ?>

            <div class="destaques">
                <img src="../STORAGE/<?php echo $dat['FOTO'] ?>" alt="Produto 1">
                <p> <?php echo $dat['DESCRICAO'] ?> </p>
                <p class="preco"> R$ <?php echo $dat['PRECO'] ?> </p>
            </div>

            <?php } ?>

        </section>

    </div>

</body>

</html>