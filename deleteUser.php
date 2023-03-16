<?php

    // include_once('pdo.inc.php');

    // if($_GET){
    //     $userId = $_GET["id"];
    // }

    // $sql = $pdo->prepare('DELETE FROM usuarios WHERE id = :id');
    // $sql->bindParam(":id", $userId);
    // $sql->execute();

    // header('location: usuarios.php?msg=1');


    require('twig-carregar.php');

    echo $twig->render('deleteUser.html');