<?php 
include "../base/sessao.php";
include "../base/controleArtista.php";
include "../base/dadosUser.php";	
include "../base/conexao.php";


$id = (int) @$_GET['id'];

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>MusiConnect - Editar Perfil</title>
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
	
$sql = mysqli_query($conexao,"SELECT * FROM musica WHERE id = '".$id."';");
$row = mysqli_fetch_array($sql);

?>
<!-- Corpo -->	
<article class="conteudo">

<div id="main" class="container-fluid">	
	
<hr>

<div class="col-md-1 hidden-xs"></div>
<div class="page-header panel panel-default col-md-10 col-xs-12 text-center">
	
	<h2 class="center cadTit">Editar Música - <?php echo $row['nome']; ?></h2>
	
		<hr>
												 
		<form method="POST" action="atualizaMusica.php">
		<!-- area de campo do form -->	
		<input type="hidden" name="id" value="<?php echo $id; ?>">
			<!-- Linha 1 -->
		<div class="row">
		
			<div class="col-md-1 hidden-xs"></div>
			<div class="form-group col-md-10 col-xs-12">
				<label for="nome">Nome</label>
				<input type="text" class="form-control" name="nome" value="<?php echo $row["nome"]; ?>" maxlength="50"required>
			</div>

		</div>
		
		<!-- Lnha 2 -->
		<div class="row">
		
			<div class="col-md-1 hidden-xs"></div>
			<div class="form-group col-md-4 col-xs-7">
				<label for="ano">Ano</label>
				<input type="number" class="form-control" name="ano" value="<?php echo $row["ano"]; ?>" min="1500" max="2017">
			</div>

			<div class="form-group col-md-6 col-xs-12">
				<label for="genero">Gênero</label>
				<input type="text" class="form-control" name="genero" value="<?php echo $row["genero"]; ?>" maxlength="24" required>
			</div>
		</div>
				
		<hr>
		
		<div id="actions" class="row">

			<div class="col-md-12 text-right">

				<button type="submit" class="btn btn-mus">Salvar</button>
				<a href="../artista/centralArtista.php" class="btn btn-default">Cancelar</a>
	
			</div>
			
			
		</div>
		</form>
		
	
</div>
</div>


</article>    
<?php 
	include "../base/rodape.php";
	include "../base/login.php";
?>
</body>
</html>