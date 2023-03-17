<?php

    require('twig-carregar.php');
    require("pdo.inc.php");

    // Rotina de POST - Apagar o usuário

    if($_SERVER["REQUEST_METHOD"] == 'POST'){
        $id = $_POST['id'] ?? false;
        if($id){
            $sql = $pdo->prepare("UPDATE usuarios SET ativo = 0 WHERE id = ?");
            $sql->execute([$id]);
        }
        header('location: usuarios.php');
        die;
    }

    // Rotina de GET - Mostrar informações na tela

    // busca o usuário no banco para mostrar o nome dele

    $id = $_GET['id'] ?? false;

    $sql = $pdo->prepare("SELECT * FROM usuarios WHERE id = ?");

    $sql->execute([$id]);

    $usuario = $sql->fetch(PDO::FETCH_ASSOC);

    echo $twig->render('deleteUser.html', [
        'usuario' => $usuario,
    ]);