<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link rel="stylesheet" type="text/css" href="./css/Reset.css"/>
    <link rel="stylesheet" type="text/css" href="./css/login.css"/>
</head>
<body>

<section id="Cabecalho">
    <img src="img/Logo.png">
</section>

<section id="Conteudo">


<article id="article_1">

<h1>Ainda <br> não é <br> cliente?</h1>
<a href="Cadastro.php">CADASTRE-SE</a>

</article>


<article id="article_2">

<h3>Entrar</h3>

<form method="POST" id="formLogin">

  <input class="campoForm" type="text" id="email" name="Email" placeholder="Email">
  <input class="campoForm" type="password" id="senha" name="Senha" placeholder="Senha">
  <input id="btnEntrar" type="submit" value="ENTRAR">
  <a href="#">Esqueceu a senha?</a>

</form>

</article>


</section>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="plugins/sweetalert2/sweetalert2.all.min.js"></script>   
<script src="./LoginControler/login.js"></script>

</body>
</html>