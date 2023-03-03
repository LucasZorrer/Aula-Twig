<?php

    $user = $_POST['user'];
    $password = $_POST['password'];

    if($user == 'Lucas' && $senha = 123){
        session_start();
        $_SESSION['user'] = 'Lucas';
        header('location: boasvindas.php');
        die;
    }else {
        header('location: login.php?erro=1');
    }