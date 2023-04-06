<?php

    require_once('models/Model.php');
    require_once('models/Usuario.php');

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

    $usr = new Usuario();
    $usr->create([
        'nome' => $nome,
        'email' => $email,
        'username' => $user,
        'senha' => $pass,
        'admin' => $admin,
        'ativo' => 1
    ]);


    header('location: usuarios.php');
