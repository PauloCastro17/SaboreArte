<html>
    <head>
        <meta charset="UTF-8" />
        <title>Tela de Upload</title>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@1,200&family=Roboto:ital,wght@1,100&display=swap" rel="stylesheet">
        <style>
            html, body{
                margin: 0;
                padding: 0;
                display: flex;
                margin-left: 15%;
                margin-top: 1%;
            }
            form{
                margin-left: 20%;
            }
            textarea{
                resize: none;
                font-display: right;
            }
            #arquivo{
                margin-left: 10%;
            }
            #botao{
                margin-left: 30%;
            }
        </style>
    </head>
    <body>
        <div>
            <div>
                <h2>Abaixo você tem de adicionar um vídeo ou foto e sua descrição</h2>
            </div>
            <div>
                <form method="post" action="processa_upload.php" enctype="multipart/form-data">
                <input id="arquivo" type="file" name="arquivo"><br><br>
                <textarea name="descricao" cols="50" rows="5"></textarea><br><br>
                <input id="botao" type="submit" value="Enviar Dados">
                </form>

               <?php
                    echo "<a href='index.php'>Sair</a>";
               ?> 
            </div>
        </div>
    </body>
</html>