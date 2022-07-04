<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>

    <link rel="stylesheet" type="text/css" href="./css/Reset.css"/>
    <link rel="stylesheet" type="text/css" href="./css/Cadastro.css"/>
</head>
<body>

<section id="Cabecalho">
    <img src="img/Logo.png">
</section>

<section id="Conteudo">

<article id="article">

<h3>Cadastrar</h3>

	<form method="POST" id="FormCadastrar" enctype="multipart/form-data">

    <input id="nome" type="text" name="nome" placeholder="Nome">
	  <input id="cpf" type="text" name="cpf" placeholder="CPF">	
	  <input id="email" type="email" name="email" placeholder="Email">
	  <input id="senha" type="password" name="senha" placeholder="Senha">
	  <div class="upload"></div><input id="UploadFoto" type="file" name="foto"></div>

	<button id="btnCadastrar" type="submit"> CADASTRAR </button>	

	</form>

</article>

</section>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="suporte/jquery/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="plugins/sweetalert2/sweetalert2.all.min.js"></script>   
<script src="./CadastroControler/Cadastro.js"></script>

</body>
</html>