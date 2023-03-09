<?php

$password = $_POST['password'] ?? false;

if($password){
    echo password_hash($password, PASSWORD_BCRYPT, [
        'cost' => 12
    ]);
}

?>


<form action="<?= $_SERVER['PHP_SELF']; ?>" method="POST">
    <input type="password" name="password", id="password">
    <br>
    <input type="submit" value="Criptografar">
</form>