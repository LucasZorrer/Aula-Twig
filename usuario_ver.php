<?php 

require('verifica_login.php');
require('twig-carregar.php');

require('models/Model.php');
require('models/Usuario.php');

$id = $_GET['id'] ?? false;

$user = new Usuario();
$user = $user->getById($id);

echo $twig->render('usuario_ver.html', ["user" => $user]);