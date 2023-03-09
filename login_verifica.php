<?php

    include_once('pdo.inc.php');
    $user = $_POST['user'];
    $password = $_POST['password'];

    $sql = $pdo->prepare('SELECT * FROM usuarios WHERE username = :username AND senha = :senha');

    $sql->bindParam(":username", $user);
    $sql->bindParam("senha", $password);

    $sql->execute();

    if($sql->rowCount()){

        $user = $sql->fetch(PDO::FETCH_OBJ);

        session_start();
        $_SESSION['user'] = $user->nome;
        header('location: boasvindas.php');
        die;
    }else {
        header('location: login.php?erro=1');
    }