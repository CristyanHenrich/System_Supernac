<?php require_once("./vendor/header.php"); ?>

<?php
include("../BD/conexao.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDV</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>

<form method="POST" id="CodBarras">

    <input type="text" id="InputCodBarras" name="InputCodBarras" placeholder="Codigo De Barras">
    <button id="btnBuscar">Buscar</button>

</form>

<div class="append"></div>

</body>

    <script>
    //-------------------------------------------------------//

    //Form Codigo De Barras
    $('#CodBarras').submit(function (e) {

    e.preventDefault();
    var CodigoDeBarras = $.trim($("#InputCodBarras").val());

    $.ajax({

        url: "./CRUD/CRUDPDV.php",
        type: "POST",
        dataType: "json",
        data: { CodigoDeBarras: CodigoDeBarras },

        success: function(data) {

                let objeto = JSON.parse(JSON.stringify(data));
                console.log(objeto[0].NOME);
                
                $("#InputCodBarras").val("");
                $(".append").append('<div class="added">'+ objeto[0].NOME +'</div>');
                $("#InputCodBarras").focus();

            }
        
        });

    });

    //-------------------------------------------------------//

    </script>

</html>