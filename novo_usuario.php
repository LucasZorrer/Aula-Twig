<?php 
    include("templates/inc/header.html");

?>

<div class="container-main">
    <form action="novo_usuario_gravar.php" method="POST">
		<div class="form-container">
			<h2>Cadastro</h2>
			<div class="input-container">
                <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome">
			</div>
			<div class="input-container">
                <input type="email" class="form-control" name="email" id="email" placeholder="Email">
			</div>
            <div class="input-container">
                <input type="text" class="form-control" name="user" id="user" placeholder="Usuário">
			</div>
            <div class="input-container">
                <input type="password" class="form-control" name="password" id="password" placeholder="Senha">
			</div>
            <input type="checkbox" name="admin" id="admin" value="1">É Ademir
			<div class="input-container">
				<button type="submit" class="btn btn-primary">Cadastrar</button>
			</div>
		</div>
	</form>
</div>