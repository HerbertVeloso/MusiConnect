<?php 
include "../base/sessao.php";
include "../base/controleUser.php";
include "../base/dadosUser.php";	
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>MusiConnect - <?php echo $dados['nome'].' '.$dados['sobrenome']; ?></title>
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

<div class="navbar navbar-default">
	<div class="center titulo">
		<p class='nome'>Perfil</p>
	</div>
	<div class="navbar-bg col-md-12 text-center">
	
		 <br/><p class='nome'><?php echo $dados['nome'].' '.$dados['sobrenome']; ?></p><br/>
         E-mail: <?php echo $dados['email']; ?> <br/><br/>
         Data de Nascimento: <?php echo date('d-m-Y',strtotime($dados['dt_nasc'])); ?> <br/><br/>
         Sexo: <?php echo $dados['sexo']; ?><br/><br/><br/>
		
		<div class='row hidden-xs'>
			<a href="../usuario/editaPerfil.php" class='btn btn-inverse'>Editar perfil</a>
			<a href="../usuario/mudaEmail.php" class='btn btn-inverse'>Alterar e-mail</a>
			<a href="../usuario/mudaSenha.php" class='btn btn-inverse'>Alterar Senha</a><br/><br/>
		</div>
		<div class='row hidden-sm hidden-md hidden-lg'>
			<a href="../usuario/editaPerfil.php" class='btn btn-xs btn-inverse'>Editar perfil</a>
			<a href="../usuario/mudaEmail.php" class='btn btn-xs btn-inverse'>Alterar e-mail</a>
			<a href="../usuario/mudaSenha.php" class='btn btn-xs btn-inverse'>Alterar Senha</a><br/><br/>
		</div>
	</div>
</div>
</div>

</article>    
<?php 
	include "../base/rodape.php";
	include "../base/login.php";
?>
</body>
</html>