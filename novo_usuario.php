<?php 


?>


<form action="novo_usuario_gravar.php" method="POST">
    <div>
        <input type="text" name="nome" id="nome" placeholder="Nome">
    </div>
    <div>
        <input type="email" name="email" id="email" placeholder="Email">
    </div>
    <div>
        <input type="text" name="user" id="user" placeholder="Usuário">
    </div>
    <div>
        <input type="password" name="password" id="password" placeholder="Senha">
    </div>
    <div>
       <input type="checkbox" name="admin" id="admin" value="1">É Ademir
    </div>
    <div>
        <button type="submit">Gravar</button>
    </div>
</form>