<?php
    session_start();
    session_destroy();
?>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>Página de Login</title>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@1,200&family=Roboto:ital,wght@1,100&display=swap" rel="stylesheet">
        <style>
            html, body{
                margin: 0;
                padding: 0;
                display: flex;
                margin-left: 19%;
                margin-top: 3%;
            }
            h2{
                margin-left: 25%;
            }
            #botao{
                margin-left: 40%;
            }
        </style>
    </head>
    <body>
        <div>
            <div>
                <h2>Tela para fazer login</h2>
            </div>
            <div>
            <form method="post" action="processa_login.php">
                <input type="name" name="nome" placeholder="Digite seu nome cadastrado">
                <input type="password" name="senha" placeholder="Digite sua senha cadastrada"><br><br>
                <input id="botao" type="submit" value="Fazer Login">
            </form>
        </div>
        </div>
    </body>
</html>