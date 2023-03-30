<?php 

require('vendor/autoload.php');
require('models/Model.php');
require('models/Usuario.php');
include_once('pdo.inc.php');

$loader = new \Twig\Loader\FilesystemLoader('./templates');

$twig = new \Twig\Environment($loader);

$template = $twig->load('listar_usuarios.html');


$users = new Usuario;


echo $template->render([
    "users" => $users
]);
