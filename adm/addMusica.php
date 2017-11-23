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
	<title>MusiConnect - Adicionar Música</title>
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
	<div class="col-md-1 hidden-xs"></div>
	<div id="cadastro" class="page-header panel panel-default col-md-10 col-xs-12">
		<h2 class="center cadTit">Adicionar Música</h2>
		<hr>
												 
		<form method="POST" action="../adm/insereMusic.php" enctype="multipart/form-data" >
		<!-- area de campo do form -->	

			<!-- Linha 1 -->
		<div class="row">
			
			<div class="form-group col-md-8 col-xs-8">
				<label for="nome">Nome da música</label>
				<input type="text" class="form-control" name="nome" maxlength="50" required>
			</div>
			
			<div class="form-group col-md-4 col-xs-4">
				<label for="artista">Artista</label>
				<input type="text" class="form-control" name="artista" maxlength="50" required>
			</div>	

		</div>
		
		<!-- Lnha 2 -->
		<div class="row">
		
			<div class="form-group col-md-2 col-xs-7">
				<label for="ano">Ano</label>
				<input type="number" class="form-control" name="ano"  min="1500" max="2017">
			</div>

			<div class="form-group col-md-5 col-xs-12">
				<label for="genero">Gênero</label>
				<input type="text" class="form-control" name="genero" maxlength="24" required>
			</div>
			
			
			<div class="form-group col-md-5 col-xs-12">
				<label for="musica">Música</label>
				<input type="file" class="form-control" name="musica" required>
			</div>
			
		</div>
		
		<hr>
		
		<div id="actions" class="row">
			<div class="col-md-12 text-right">

				<button type="submit" class="btn btn-mus">Salvar</button>
				<a href="../adm/musicasAdm.php" class="btn btn-default">Cancelar</a>
	
			</div>
			
			
		</div>
		</form>
	</div>
</div>
</article>    
<?php 
	include "../base/rodape.php";
?>
</body>
</html>