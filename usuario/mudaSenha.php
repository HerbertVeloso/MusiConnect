<?php 
include "../base/sessao.php";
include "../base/controleUser.php";
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
    <link rel="shortcut icon" href="imagens/favicon.png">
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
	
$sql = mysqli_query($conexao,"SELECT * FROM usuario WHERE id = '".$_SESSION['UsuarioID']."';");
$row = mysqli_fetch_array($sql);

?>
<!-- Corpo -->	
<article class="conteudo">

<div id="main" class="container-fluid">	
	
<hr>
<div><?php include "../base/mensagens.php"; ?></div>

<div class="col-md-1 hidden-xs"></div>
<div class="page-header panel panel-default col-md-10 col-xs-12 text-center">
	
	<h2 class="center cadTit">Alterar Senha - <?php echo $row['nome']." ".$row['sobrenome']; ?></h2>
	
		<hr>
				
			<input type="hidden" value="<?php echo $row['senha']; ?>" id="senhaAntiga">	
				
		<form method="POST" action="../usuario/atualizaSenha.php">
		<!-- area de campo do form -->	

		<!-- Lnha 1 -->
		<div class="row">
		
			<div class="col-md-1 hidden-xs"></div>
			<div class="form-group col-md-10 col-xs-12">
				<label for="senha">Nova senha</label>
				<input type="password" class="form-control" name="senha" id="senha" required>
			</div>	
			
		</div>
		
		<!-- Linha 2 -->
		<div class="row"> 
	
			<div class="col-md-1 hidden-xs"></div>
			<div class="form-group col-md-10 col-xs-12">
				<label for="confirm">Confirmar nova senha</label>
				<input type="password" class="form-control" name="confirm"  oninput="validaSenha(this)" required>
			</div>
	
		</div>
		
		<hr>
		
		<div id="actions" class="row">

			<div class="col-md-12 text-right">

				<button type="submit" class="btn btn-mus">Salvar</button>
				<a href="../usuario/perfil.php" class="btn btn-default">Cancelar</a>
	
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