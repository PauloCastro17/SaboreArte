<?php
    $nome = $_POST['nome'];
    $senha = $_POST['senha'];

    $con = new PDO("mysql:host=localhost; dbname=saborearte", "root", "");
    $stmt = $con->prepare("SELECT * FROM cadastro WHERE nome = ? AND senha = ?");
    $stmt->bindParam(1, $nome);
    $stmt->bindParam(2, $senha);
    $stmt->execute();
    $resultado = $stmt->fetchAll();

    $logado = false;
    foreach ($resultado as $item){
        $logado = true;
        session_start();
        $_SESSION['nome'] = $item['nome'];
        $_SESSION['senha'] = $item['senha'];
    }
    if($logado){
        header("location: Tela_Upload.php");
    }

    else{
        echo "ERRO!!";
    }
?>