<?php

    require_once('pdo.inc.php');

    $nome = $_POST['nome'] ?? false;
    $user = $_POST['user'] ?? false;
    $password = $_POST['password'] ?? false;
    $email = $_POST['email'] ?? false;
    $admin = $_POST['admin'] ?? false;


    if(!$user || !$password || !$nome || !$email){
        header("Location: novo_usuario.php");
        die;
    }

    $pass = password_hash($password, PASSWORD_BCRYPT, [
        'cost' => 12
    ]);

    $sql = $pdo->prepare("INSERT INTO usuarios (nome, email, username, senha, admin)  
    VALUES (:nome, :email, :user, :senha, :admin)");

    $sql->bindParam(":user", $user);
    $sql->bindParam(":senha", $pass);
    $sql->bindParam(":nome", $nome);
    $sql->bindParam(":email", $email);
    $sql->bindParam(":admin", $admin);

    $sql->execute();
