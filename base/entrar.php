<?php
	include "../base/sessao.php";
	if (isset($_SESSION['UsuarioID'])) {
		session_destroy();
		header("Location: ../base/entrar.php"); exit;
	}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>MusiConnect - Entrar</title>
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
	
		<!-- Cadastro do site -->
		<div class="row juntar-topo">
		<div class="col-md-1 hidden-xs"></div>
		<div id="cadastro" class="page-header panel panel-default col-md-10 col-xs-12">
			<h2 class="center cadTit">Entrar</h2>
			<hr>
			<div><?php include "../base/mensagens.php"; ?></div>
		<form  name="signup" method="post" action="../base/valida.php">
			<!-- area de campo do form -->	
				<!-- Linha 1 -->
			<div class="row"><br/>
				<div class="col-md-1"></div>
				
				<div class="form-group col-md-10 col-xs-12 text-center">
				<label>E-mail: </label>
				<input type="email" class="form-control" name="email" required><br/>
				</div>
			
				<div class="col-md-1"></div>
			</div>
			<!-- Lnha 2 -->
			<div class="row"><br/>
                <div class="col-md-1"></div>
                
				<div class="form-group col-md-10 col-xs-12 text-center">
				<label>Senha: </label>
				<input type="password" class="form-control" name="senha" required><br/>
                </div>
				
                <div class="col-md-1"></div>
			</div>
           
			
			<hr>
			
			<div id="actions" class="row">
				<div class="col-md-12">
				<center>
					<a href="../index.php" class="btn btn-default">Cancelar</a>
					<button type="submit" class="btn btn-inverse">Entrar</button>
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