<?php

    require('twig-carregar.php');
    require('pdo.inc.php');

    $token = $_GET['token'] ?? $_POST['token'] ?? false;

    if(!$token){
        header('location:login.php');
        die;
    }
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $password = $_POST['password'] ?? false;
        $confirm_password = $_POST['confirm_password'] ?? false;
        $password = trim($password);
        $confirm_password = trim($confirm_password);
        
        
        if($password === $confirm_password){
            $password = password_hash($password, PASSWORD_BCRYPT);
            $sql = $pdo->prepare("UPDATE usuarios SET senha = :senha, recupera_token = NULL WHERE recupera_token = :token");
            $sql->bindParam(':senha', $password);
            $sql->bindParam(':token', $token);
            $sql->execute();
            header('location:login.php?erro=3');
            die;
        }
    }

    $msg = 'Conseguiu Errar a senha, né?';

    $sql = $pdo->prepare('SELECT * FROM usuarios WHERE recupera_token = ?');
    $sql->execute([$token]);

    if($sql->rowCount() == 1){
        echo $twig->render('recuperar_senha_escolher.html', ['token' => $token, 'msg' => $msg]);
    }   