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

        #Chamados{
            list-style-type: none;
            text-decoration: none;
            outline: none;
            color: gray;
            opacity: 50%;
            text-shadow: black 0.05em 0.05em 0.06em
        }

        #Chamados a{
            text-decoration: none;
            color: gray;
        }

        #Chamados:hover {
            transform: translate(5px);
            color: #0057b8;
            opacity: 100%;
            transition: width 1s, height 1s, transform 0.3s;
        }

        #Maquinas{
            list-style-type: none;
            text-decoration: none;
            outline: none;
            color: gray;
            opacity: 50%;
            text-shadow: black 0.05em 0.05em 0.06em
        }

        #Maquinas a{
            text-decoration: none;
            color: gray;
        }

        #Maquinas:hover {
            transform: translate(5px);
            color: #0057b8;
            opacity: 100%;
            transition: width 1s, height 1s, transform 0.3s;
        }

        #Relatorios{
            list-style-type: none;
            text-decoration: none;
            outline: none;
            color: gray;
            opacity: 50%;
            text-shadow: black 0.05em 0.05em 0.06em
        }

        #Relatorios a{
            text-decoration: none;
            color: gray;
        }

        #Relatorios:hover {
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
                <li id="Dashboad"><a href="./index.php"><span> <i href="./index.php" class="fas fa-solid fa-chart-pie fa-2x"></i> </span></a></li>
                <li id="Relatorios"><a href="./Relatorios.php"><span> <i class="fas fa-solid fa-file-signature fa-2x"></i> </span></a></li>
            </ul>
        </nav>
    </section>

</body>

</html>