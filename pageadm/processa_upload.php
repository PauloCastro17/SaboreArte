<?php
    $descricao = $_POST['descricao'];

    $dir = "../pageusuario/imagem/";
    $file = $_FILES['arquivo'];
    $destino = "$dir" . $file['name'];

    if(move_uploaded_file($file["tmp_name"], $destino)){
        echo "Arquivo enviado com sucesso<br>";
    }
    else{
        echo "Erro com o arquivo<br>";
    }

    if(isset($descricao) && $descricao!=""){
        $con = new PDO("mysql:host=localhost; dbname=saborearte", "root", "");
        $stmt = $con->prepare("INSERT INTO doces(fotoevideo, descricao) VALUES(?, ?)");
        $stmt->bindParam(1, $destino);
        $stmt->bindParam(2, $descricao);
        $stmt->execute();

        echo "Envio feito com sucesso<br>";
        echo "Clique aqui para fazer um novo Upload <a href='Tela_Upload.php'> Voltar</a>";
    }
    else{
        echo "Erro no envio";
    }
?>