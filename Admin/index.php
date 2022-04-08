<?php require_once("./vendor/header.php"); ?>
<?php require_once("./vendor/menu.php"); ?>

<?php
include("../BD/conexao.php");
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | Administrador</title>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap');

        #Dinamica {
            margin-top: 25px;
            margin-left: 130px;
            min-height: 100vh;
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            justify-content: flex-start;
            align-items: flex-start;
            gap: 30px;
            align-content: flex-start;
        }

        #Dashboad {
            transform: translate(5px);
            color: #0057b8;
            opacity: 100%;
        }

        #Dashboad a {
            text-decoration: none;
            color: #0057b8;
        }

        .PersonalDataCalled {
            width: 45%;
            min-width: 350px;
            height: 250px;
            border-radius: 20px;
            background-color: #F8F8F8;
            box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;
        }

        .GroupTasks {
            width: 100%;
            min-width: 400px;
            min-height: 300px;
            height: auto;
            border-radius: 20px;
            background-color: #F8F8F8;
            box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;
        }

        #Chamados_Concluidos_Por_Voce {
            display: flex;
            flex-direction: column;
            flex-wrap: nowrap;
            align-content: center;
            justify-content: flex-start;
            align-items: center;
        }

        #Chamados_Concluidos_Por_Voce .ldBar path.mainline {
            stroke-width: 10;
            stroke: #2aae2a;
            stroke-linecap: round;
        }

        #Chamados_Concluidos_Por_Voce .ldBar path.baseline {
            stroke-width: 5;
            stroke: #bdc2c6;
            stroke-linecap: round;
        }

        #Chamados_Concluidos_Por_Voce .ldBar-label {
            text-align: center;
            font-size: 18px;
            font-weight: 500;
            font-family: 'Montserrat', sans-serif;
        }


        #Chamados_Cancelados_Por_Voce {
            display: flex;
            flex-direction: column;
            flex-wrap: nowrap;
            align-content: center;
            justify-content: flex-start;
            align-items: center;
        }

        #Chamados_Cancelados_Por_Voce .ldBar path.mainline {
            stroke-width: 10;
            stroke: #eb616c;
            stroke-linecap: round;
        }

        #Chamados_Cancelados_Por_Voce .ldBar path.baseline {
            stroke-width: 5;
            stroke: #bdc2c6;
            stroke-linecap: round;
        }

        #Chamados_Cancelados_Por_Voce .ldBar-label {
            text-align: center;
            font-size: 18px;
            font-weight: 500;
            font-family: 'Montserrat', sans-serif;
        }

        h4 {
            margin-top: 25px;
            color: #bdc2c6;
            opacity: 80%;
            font-family: 'Montserrat', sans-serif;
            text-align: center;
        }

        #GroupTasksList {
            display: flex;
            flex-direction: column;
            flex-wrap: nowrap;
            align-content: center;
            justify-content: flex-start;
            align-items: center;
            gap: 15px;
            margin-bottom: 30px;
            padding-bottom: 40px;
        }

        .Tarefas {
            width: 90%;
            height: auto;
            background-color: white;
            padding: 15px;
            border-radius: 10px;
            box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;
            display: flex;
            flex-direction: row;
            flex-wrap: nowrap;
            align-content: center;
            justify-content: center;
            align-items: center;
            text-align: justify;
            font-family: 'Montserrat', sans-serif;
        }

        .Tarefas:hover {
            background-color: #bdc2c6;
        }

        #AddTarefa {
            color: white;
            margin: 10px;
            margin-bottom: 25px;
            background-color: #2aae2a;
            padding-left: 10px;
            padding-right: 10px;
            padding-top: 3px;
            padding-bottom: 3px;
            border-radius: 10px;
            box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;
        }

        #AddTarefa:hover {
            color: #2aae2a;
            background-color: white;
        }

        h1 {
            margin-top: 25px;
            font-family: 'Montserrat', sans-serif;
            text-align: center;
            font-size: 100px;
            color: #0057b8;
            font-weight: 900;
        }

        #Information {
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            align-content: center;
            justify-content: center;
            align-items: center;
            gap: 25px;
            width: 60%;
        }

        #Tasks {
            width: 35%;
            display: flex;
            flex-direction: column;
            flex-wrap: nowrap;
            align-content: center;
            justify-content: center;
            align-items: center;
        }

        .swal-wide {
            width: 700px !important;
            height: 500px !important;
        }
        #Mensagem{
            width: 500px !important;
            height: 200px !important;
        }
    </style>
</head>

<body>

    <div id="Dinamica">

        <div id="Information">
            <section class="PersonalDataCalled" id="Chamados_Concluidos_Por_Voce">
                <h4>Estoque alto 🟢</h4>
                <div class="ldBar" data-value="80" data-preset="fan" data-type="stroke" style="width: 200px;height: 130px;">
                </div>
            </section>

            <section class="PersonalDataCalled" id="Chamados_Cancelados_Por_Voce">
                <h4>Estoque baixo 🔴</h4>
                <div class="ldBar" data-value="20" data-preset="fan" style="width: 200px;height: 130px;">
                </div>
            </section>

            <section class="PersonalDataCalled" id="Chamados_Concluidos_Por_Voce">
                <h4>Total em vendas 🛒</h4>
                <h1 id="TotalComputadores">X</h1>
            </section>

            <section class="PersonalDataCalled" id="Chamados_Cancelados_Por_Voce">
                <h4>Total de usuários 🌐</h4>
                <h1 id="TotalUsuarios">X</h1>
            </section>

        </div>

        <div id="Tasks">

            <section class="GroupTasks" id="GroupTasksList">
                <h4>Ultimas vendas 🚀</h4>

                <?php

                $sql_read = "SELECT * FROM vendas ORDER BY ID DESC LIMIT 5";
                $dados = $PDO->query($sql_read);
                $resultado = $dados->fetchAll(PDO::FETCH_ASSOC);

                foreach ($resultado as $dado) {

	            $ID = $dado['ID'];
	            $TOTAL = $dado['TOTAL_VENDA'];

                ?>

                    <article id="<?php echo $ID; ?>" class="Tarefas">
                        <h6><?php echo $TOTAL; ?></h6>
                    </article>

                <?php } ?>

            </section>

        </div>

    </div>

</body>

</html>