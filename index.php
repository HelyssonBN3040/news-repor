<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bem-Vindo</title>
    <link rel="shortcut icon" href="https://www.guiadigital.org/midia/supermercado-icone.png">
    <style>
        * {
            box-sizing: border-box;
            font-family: inherit;
            font-size: 20px;
            margin: 0px;
        }
        
        html {
            background: linear-gradient(purple, #DA70D6, #9932CC);
            height: 100%;
        }
        
        .container {
            margin-left: 490px;
            width: 360px;
            height: 300px;
            background-color: rgb(250, 250, 250);
            box-shadow: 1px 2px 7px rgb(116, 116, 116);
            border-radius: 7px;
        }
        
        input {
            margin-top: 17px;
            margin-left: 54px;
        }
        
        .stylebotao {
            margin-top: 17px;
            margin-left: 54px;
            background: linear-gradient(purple, #8A2BE2);
            width: 250px;
            height: 50px;
            font-size: 23px;
            font-weight: bold;
            font-family: ARIAL;
            border: none;
        }
        
        .stylebotao a {
            width: 250px;
            height: 50px;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0px;
        }
        
        .stylebotao2 {
            margin-top: 17px;
            margin-left: 54px;
            background-color: #36a420;
            width: 250px;
            height: 50px;
            font-size: 23px;
            font-weight: bold;
            font-family: ARIAL;
            border: none;
        }
        
        .stylebotao2 a {
            width: 250px;
            height: 50px;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-left: 100px;
            margin: 0px;
        }
        
        a {
            margin-left: 100px;
            margin-bottom: 20px;
            text-decoration: none;
            color: blue;
        }
        
        .linha {
            margin-top: 7px;
            margin-left: 40px;
            width: 280px;
            height: 1px;
            background-color: rgba(212, 207, 207, 0.849);
        }
        
        @media screen and (max-width :375px) {
            .container {
                width: 360px;
                margin-left: 0px;
            }
            html {
                height: 100%;
            }
        }
    </style>
</head>

<body>
    <br><br><br>
    <div class="container">
        <form action="" method="GET">
            <input type="email" placeholder="Nome de Usuario(ID)" autofocus>
            <input type="password" placeholder="Senha">
            <div class="stylebotao">
                <a href="paginadelogin.html">Entrar</a>
            </div><br>
            <a href="">Esqueceu a senha?</a><br>
            <div class="linha"></div>
            <div class="stylebotao2">
                <a href="">Crie Sua Conta</a>
            </div>
        </form>
    </div>

</body>

</html>

</html>