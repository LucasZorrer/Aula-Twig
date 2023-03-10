<?php

    include_once('pdo.inc.php');
    $user = $_POST['user'];
    $password = $_POST['password'];

    $sql = $pdo->prepare('SELECT * FROM usuarios WHERE username = :username');

    $sql->bindParam(":username", $user);

    $sql->execute();

    if($sql->rowCount()){

        $user = $sql->fetch(PDO::FETCH_OBJ);

        if(!password_verify($password, $user->senha)){
            header('location: login.php?erro=1');
            die;
        }

        session_start();
        $_SESSION['user'] = $user->nome;
        header('location: boasvindas.php');
        die;
    }else {
        header('location: login.php?erro=1');
        die;
    }