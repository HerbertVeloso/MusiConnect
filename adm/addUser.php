<?php
	include "../base/sessao.php";
	include "../base/controleAdm.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>MusiConnect - Cadastro</title>
    <link rel="shortcut icon" href="../imagens/favicon.png">
	<link href="../css/bootstrap.min.css" rel="stylesheet">
	<link href="../css/estilo.css" rel="stylesheet">
	<script src="../js/jquery.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script type="text/javascript" src="../js/functions.js"></script>
</head>
<body>
<!-- Menu -->
<?php
	include "../base/menu.php";
?>
<!-- Corpo -->	
<article class="conteudo">
	<div id="main" class="container-fluid">	
	<hr>
	<div><?php include "../base/mensagens.php"; ?></div>
		<!-- Cadastro do site -->
		<div class="row juntar-topo">
		<div class="col-md-1 hidden-xs"></div>
		<div id="cadastro" class="page-header panel panel-default col-md-10 col-xs-12">
			<h2 class="center cadTit">Cadastrar Usuário</h2>
			<hr>
			
		<form method="post" action="insereUser.php">
			<!-- area de campo do form -->	
				<!-- Linha 1 -->
			<div class="row"><br/>
				<div class="col-md-1"></div>
				
				<div class="form-group col-md-5 col-xs-12">
					<label for="nome">Nome</label>
					<input type="text" class="form-control" name="nome" maxlength="24" required>
				</div>
				
				<div class="form-group col-md-5 col-xs-12">
					<label for="sobrenome">Sobrenome</label>
					<input type="text" class="form-control" name="sobrenome" maxlength="24" required>
				</div>

				<div class="col-md-1"></div>
			</div>
			<!-- Lnha 2 -->
			<div class="row"><br/>
                <div class="col-md-1"></div>
                
				<div class="form-group col-md-6 col-xs-12">
					<label for="email">Email</label>
					<input type="email" class="form-control" name="email" maxlength="64" required>
				</div>
				
				<div class="form-group col-md-2 col-xs-7">
					<label for="dt_nasc">Dt. Nascimento</label>
					<input type="date" class="form-control" name="dt_nasc" required>
				</div>
				
				<div class="form-group col-md-2 col-xs-5">
					<label for="sexo">Sexo</label>
					 <select class="form-control" name="sexo">
					 <option>Masculino</option>
					 <option>Feminino</option>
					 </select>
				</div>
                
                <div class="col-md-1"></div>
			</div>
            <!-- Lnha 3 -->
			<div class="row"><br/>
				<div class="col-md-1"></div>
                
                <div class="form-group col-md-5 col-xs-12">
					<label for="senha">Senha</label>
					<input type="password" class="form-control" name="senha" id="senha" required>
				</div>

				<div class="form-group col-md-5 col-xs-12">
					<label for="confirm">Confirmar Senha</label>
					<input type="password" class="form-control" name="confirm" oninput="validaSenha(this)" required>
				</div>
				
                <div class="col-md-1"></div>
			</div>
			
			<hr>
			
			<div id="actions" class="row">
				<div class="col-md-12">
				<center>
					<a href="../adm/usersAdm.php" class="btn btn-default">Cancelar</a>
					<button type="submit" class="btn btn-mus">Cadastrar</button>
				</center>
				</div>
				
			</div>
		</div>
		</form>
		
	</div>
</article>    
<?php 
	include "../base/rodape.php";
	include "../base/login.php";
?>
</body>
</html>