<?php 
include "../base/sessao.php";
include "../base/controleArtista.php";
include "../base/dadosUser.php";	
include "../base/conexao.php";

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
	
$sql = mysqli_query($conexao,"SELECT * FROM artista WHERE id = '".$_SESSION['artistaID']."';");
$row = mysqli_fetch_array($sql);

?>
<!-- Corpo -->	
<article class="conteudo">

<div id="main" class="container-fluid">	
	
<hr>

<div class="col-md-1 hidden-xs"></div>
<div class="page-header panel panel-default col-md-10 col-xs-12 text-center">
	
	<h2 class="center cadTit">Editar Perfil Artistico - <?php echo $row['nome']; ?></h2>
	
		<hr>
												 
		<form method="POST" action="../artista/atualizaArtista.php" enctype="multipart/form-data" >
		<!-- area de campo do form -->	

			<!-- Linha 1 -->
		<div class="row">
		
			<div class="col-md-1 hidden-xs"></div>
			<div class="form-group col-md-10 col-xs-12">
				<label for="nome">Nome</label>
				<input type="text" class="form-control" name="nome" value="<?php echo $row["nome"]; ?>" required>
			</div>

		</div>
		
		<!-- Lnha 2 -->
		<div class="row">
		
			<div class="col-md-1 hidden-xs"></div>
			<div class="form-group col-md-10 col-xs-12">
					<label for="foto">Foto</label>
					<input type="file" class="form-control" name="foto" required>
			</div>	
			
		</div>
		
		<hr>
		
		<div id="actions" class="row">

			<div class="col-md-12 text-right">

				<button type="submit" class="btn btn-mus">Salvar</button>
				<a href="../artista/estudio.php" class="btn btn-default">Cancelar</a>
	
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