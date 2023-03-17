<?php 
    include("templates/inc/header.html");

?>
<div class="container-login">
    <form action="novo_usuario_gravar.php" method="POST">
        <div>
            <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome">
        </div>
        <div>
            <input type="email" class="form-control" name="email" id="email" placeholder="Email">
        </div>
        <div>
            <input type="text" class="form-control" name="user" id="user" placeholder="Usuário">
        </div>
        <div>
            <input type="password" class="form-control" name="password" id="password" placeholder="Senha">
        </div>
        <div>
        <input type="checkbox" name="admin" id="admin" value="1">É Ademir
        </div>
        <div>
          <button type="submit" class="btn btn-primary">Acessar</button>
        </div>
    </form>
</div>
