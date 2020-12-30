<html>
    <head>
        <meta charset="UTF-8" />
        <title>Sabor E Arte</title>
        <link rel="stylesheet" href="./CSS/main.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@1,200&family=Roboto:ital,wght@1,100&display=swap" rel="stylesheet">
    </head>
    <body>
        <div>
            <div id="titulo">
                <h1>Sabor e Arte</h1>
            </div>
            <div id="subtitulo">
                <h3>Seja Bem-Vindo à Sabor e Arte</h3>
            </div>
            <div id="obs">
                <label>OBS: Aqui você ira ver Fotos e Vídeos do nosso trabalho</label>
            </div>
            <div>
                <?php
                        $con = new PDO("mysql:host=localhost; dbname=saborearte", "root", "");
                        $sql  = ("SELECT * FROM doces");
                        $stmt = $con->prepare($sql);
                        $stmt ->execute();
                        $resultado = $stmt->fetchAll();
                        session_start();
                        foreach ($resultado as $item) {
                            $_SESSION['arquivo'] = $item['fotoevideo'];
                            $_SESSION['descricao'] = $item['descricao'];

                            echo "<div><img style='width: 25%; margin: 10px; margin-left: 15%;' src='{$_SESSION['arquivo']}'>";
                            echo "<div><p style='max-width: 15px;'>{$_SESSION['descricao']}</p></div></div><br><br><br>";
                        }

                ?>
            </div>

        <footer>
            <div ><a href="https://api.whatsapp.com/send?l=pt-BR&phone=5588996745025"><img width="40" " src="./images/whatsapp.svg" ></a>
            <a href="https://www.instagram.com/saboreartequixada/?hl=pt-br"><img width="40" src="./images/Instagram.svg"></a></div>
        </footer>
</div>
    </body>
</html>