<?php 
include "../base/sessao.php";
include "../base/controleAdm.php";
include "../base/dadosUser.php";	
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>MusiConnect - Painel de Controle</title>
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
		<p class='nome'>Painel de Controle</p>
	</div>
	<div class="navbar-bg col-md-12 text-center">
	<br/>
	
		<a href="../adm/musicasAdm.php" class='btn btn-inverse'>Gerenciar Músicas <span class="glyphicon glyphicon-music" aria-hidden="true"></span></a>
		
		<div class='visible-xs'> <br/> </div>
		
		<a href="../adm/usersAdm.php" class='btn btn-inverse'>Gerenciar Usuáios <span class="glyphicon glyphicon-user" aria-hidden="true"></span></a>
		
		<div class='visible-xs'> <br/> </div>
		
		<a href="../adm/artistasAdm.php" class='btn btn-inverse'>Gerenciar Artistas <span class="glyphicon glyphicon-cd" aria-hidden="true"></span></a><br/><br/>
	
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