<?php



if (!isset($_SESSION)) session_start();

$NOME = $_SESSION['NOME']; 
$CPF = $_SESSION['CPF'];
$EMAIL = $_SESSION['EMAIL'];
$TIPO = $_SESSION['TIPO'];
$FOTO = $_SESSION['FOTO'];

if (($_SESSION['NOME'] == '')) {
    session_destroy();
    header("Location: ../LoginPage.php");
    exit;
}

/*
if (($_SESSION['PAINEL'] < $nivel_necessario)) {
session_destroy();
header("Location: ../index.php");
exit;
}

*/

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script src="https://kit.fontawesome.com/2d97efafe7.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" type="text/css" href="../Bibliotecas/LoadingBars/loading-bar.css" />
    <script type="text/javascript" src="../Bibliotecas/LoadingBars/loading-bar.js"></script>

    <link href="//cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css" rel="stylesheet">
    <script src="//cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>

    <script src="./js/main.js"></script>
    <link rel="stylesheet" type="text/css" href="./css/Header.css"/>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;">
        <div class="container-fluid">

            <a href="./index.php">
                <img src="./img/Logo.png" alt="" style="padding: 5px; margin-left: 50px;">
            </a>

            <section id="PerfilMenuInfo">
                <h6 style="color: #A9A9A9;"><?php echo $NOME ?></h6>
                <div class="menu-drop">
                    <img id="ImgPerfil" src="./img/User.png" alt="" width="50" height="50">
                    <div class="drop-content">
                        <a href="#"><span style="color: #0057b8;"><i class="fas fa-solid fa-user fa-lg"></i></span></a>
                        <a href="#"><span style="color: #0057b8;"><i class="fas fa-solid fa-power-off fa-lg"></i></span></a>
                    </div>
                </div>
            </section>



        </div>
    </nav>

</body>

</html>