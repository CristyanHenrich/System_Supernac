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

#AP h1 {
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

.destaquesOferta {
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
    background-color: red;
}

#OP {
    display: flex;
    flex-direction: colum;
    flex-wrap: nowrap;
    align-content: center;
    justify-content: space-around;
    align-items: center;
}

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

.Novidade {
    margin-top: 70px;
    margin-bottom: 70px;
}

.Novidade article {
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    justify-content: center;
    align-items: center;
    align-content: center;
    gap: 50px;
    margin-top: 50px;
}

.NovoProduto {
    width: 300px;
    height: 400px;
    background-color: #FFFFFF;

    display: flex;
    flex-direction: column;
    flex-wrap: wrap;
    justify-content: center;
    align-items: center;
    align-content: center;
    box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
}

.NovoProduto img {
    width: 200px;
    height: 200px;
    margin: 15px;
}

.NovoProduto p {
    margin: 10px;
}

.NovoProduto h5 {
    margin: 10px;
    font-size: 25px;
    font-weight: 600;
    color: #FF8900;
}
</style>

<body>

    <div class="Categorias">
        <h6><a href="filtro.php?categoria=Alimentos">Alimentos</a></h6>
        <h6><a href="filtro.php?categoria=Bebidas">Bebidas</a></h6>
        <h6><a href="filtro.php?categoria=Acogue">Acogue</a></h6>
        <h6><a href="filtro.php?categoria=Mercearia">Mercearia</a></h6>
        <h6><a href="filtro.php?categoria=Eletronicos">Eletronicos</a></h6>
        <h6><a href="filtro.php?categoria=Informatica">Informatica</a></h6>
    </div>


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





            <?php foreach ($data as $dat) { 

                if($dat['OFERTA'] == 'S'){ ?>

            <div class="destaquesOferta">
                <img src="../STORAGE/<?php echo $dat['FOTO'] ?>" alt="Produto 1">
                <p> <?php echo $dat['DESCRICAO'] ?> </p>
                <p class="preco"> R$ <?php echo $dat['PRECO'] ?> </p>
            </div>

            <?php } else { ?>


            <div class="destaques">
                <img src="../STORAGE/<?php echo $dat['FOTO'] ?>" alt="Produto 1">
                <p> <?php echo $dat['DESCRICAO'] ?> </p>
                <p class="preco"> R$ <?php echo $dat['PRECO'] ?> </p>
            </div>

            <?php } }?>


        </section>

    </div>


    <div class="container Novidade">

        <h1>Novidades</h1>

        <article>

            <section class="NovoProduto">

                <img src="./img/Logo.png">

                <p>It is a long established fact that </p>

                <h5>R$ 120,00</h5>

            </section>

            <section class="NovoProduto">

                <img src="./img/Logo.png">

                <p>It is a long established fact that </p>

                <h5>R$ 120,00</h5>

            </section>

            <section class="NovoProduto">

                <img src="./img/Logo.png">

                <p>It is a long established fact that </p>

                <h5>R$ 120,00</h5>

            </section>
        </article>

    </div>

</body>

</html>