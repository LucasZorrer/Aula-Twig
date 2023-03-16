<?php 

require('vendor/autoload.php');
include_once('pdo.inc.php');

$loader = new \Twig\Loader\FilesystemLoader('./templates');

$twig = new \Twig\Environment($loader);

$template = $twig->load('listar_usuarios.html');

$sql = $pdo->query('SELECT * FROM usuarios');

$sql->execute();

$users = $sql->fetchAll(PDO::FETCH_ASSOC);


echo $template->render([
    "users" => $users
]);
