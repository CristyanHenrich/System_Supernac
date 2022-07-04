<!DOCTYPE html>

<head>

    <style>
        body,
        html {
            height: 100vh;
        }

        #menu {
            display: flex;
            position: absolute;
            width: 100px;
            height: 100vh;
            margin: 0;
            flex-direction: column;
            flex-wrap: nowrap;
            justify-content: flex-start;
            align-items: flex-start;
            align-content: center;
            box-shadow: rgb(99 99 99 / 20%) 0px 2px 8px 0px;
        }

        #navgator ul {
            display: flex;
            gap: 30px;
            flex-direction: column;
            flex-wrap: nowrap;
            align-content: center;
            justify-content: center;
            align-items: center;
            margin-top: 25px;
        }

        #Dashboad{
            list-style-type: none;
            text-decoration: none;
            outline: none;
            color: gray;
            opacity: 50%;
            text-shadow: black 0.05em 0.05em 0.06em
        }

        #Dashboad a{
            text-decoration: none;
            color: gray;
        }

        #Dashboad:hover {
            transform: translate(5px);
            color: #0057b8;
            opacity: 100%;
            transition: width 1s, height 1s, transform 0.3s;
        }

        #Produtos{
            list-style-type: none;
            text-decoration: none;
            outline: none;
            color: gray;
            opacity: 50%;
            text-shadow: black 0.05em 0.05em 0.06em
        }

        #Produtos a{
            text-decoration: none;
            color: gray;
        }

        #Produtos:hover {
            transform: translate(5px);
            color: #0057b8;
            opacity: 100%;
            transition: width 1s, height 1s, transform 0.3s;
        }

        #Pessoas{
            list-style-type: none;
            text-decoration: none;
            outline: none;
            color: gray;
            opacity: 50%;
            text-shadow: black 0.05em 0.05em 0.06em
        }

        #Pessoas a{
            text-decoration: none;
            color: gray;
        }

        #Pessoas:hover {
            transform: translate(5px);
            color: #0057b8;
            opacity: 100%;
            transition: width 1s, height 1s, transform 0.3s;
        }

        #Vendas{
            list-style-type: none;
            text-decoration: none;
            outline: none;
            color: gray;
            opacity: 50%;
            text-shadow: black 0.05em 0.05em 0.06em
        }

        #Vendas a{
            text-decoration: none;
            color: gray;
        }

        #Vendas:hover {
            transform: translate(5px);
            color: #0057b8;
            opacity: 100%;
            transition: width 1s, height 1s, transform 0.3s;
        }

        #PDV{
            list-style-type: none;
            text-decoration: none;
            outline: none;
            color: gray;
            opacity: 50%;
            text-shadow: black 0.05em 0.05em 0.06em
        }

        #PDV a{
            text-decoration: none;
            color: gray;
        }

        #PDV:hover {
            transform: translate(5px);
            color: #0057b8;
            opacity: 100%;
            transition: width 1s, height 1s, transform 0.3s;
        }


    </style>

</head>


<body>



    <section id="menu" class="bg-light">
        <nav id="navgator">
            <ul>
                <li id="Dashboad"><a href="./index.php"><span><ion-icon name="pie-chart-sharp" style="font-size: 36px;"></ion-icon></span></a></li>
                <li id="Produtos"><a href="./Produtos.php"><span><ion-icon name="cube-sharp" style="font-size: 36px;"></ion-icon></span></a></li>
                <li id="Pessoas"><a href="./Pessoas.php"><span><ion-icon name="people-sharp" style="font-size: 36px;"></ion-icon></span></a></li>
                <li id="Vendas"><a href="./Vendas.php"><span><ion-icon name="newspaper-sharp" style="font-size: 36px;"></ion-icon></span></a></li>
                <li id="PDV"><a href="./PDV.php"><span><ion-icon name="desktop-sharp" style="font-size: 36px;"></ion-icon></span></a></li>
            </ul>
        </nav>
    </section>

</body>

</html>