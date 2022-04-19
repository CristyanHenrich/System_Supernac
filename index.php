<?php require_once("./vendor/header.php"); ?>

<?php

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

.slider{
    margin-top: 50px;
    margin-bottom: 50px;
}

#CNP{
    width: 100%;
    height: 400px;
    background-color: #FF8900;
}

#AP{

    margin-top: 50px;

}

.destaques img{
    width: 150px;
    height: 160px;
    margin-top: 20px;
}

.destaques{
    display: column;
    flex-direction: row;
    flex-wrap: nowrap;
    align-content: center;
    justify-content: center;
    background-color: white;
    width: 250px;
    height: 350px;
    box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
}

#OP{
    display: flex;
    flex-direction: row;
    flex-wrap: nowrap;
    align-content: center;
    justify-content: center;
    align-items: center;
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

<section id="OP" class="container">

<div class="destaques">
        <img src="./img/Pagina/produto1.png" alt="Produto 1">
        <p> Xiaomi Poco X3 Pro Dual Sim 128gb 6gb </p>
        <p class="preco"> R$ 2.199,00 </p>
</div>

<div class="destaques">
        <img src="./img/Pagina/produto1.png" alt="Produto 1">
        <p> Xiaomi Poco X3 Pro Dual Sim 128gb 6gb </p>
        <p class="preco"> R$ 2.199,00 </p>
</div>

<div class="destaques">
        <img src="./img/Pagina/produto1.png" alt="Produto 1">
        <p> Xiaomi Poco X3 Pro Dual Sim 128gb 6gb </p>
        <p class="preco"> R$ 2.199,00 </p>
</div>


</section>
    
</div>
    
</body>

</html>