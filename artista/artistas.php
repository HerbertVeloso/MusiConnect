<?php include "../base/sessao.php"; ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>MusiConnect</title>
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

<div class="navbar navbar-default">
  <div class="col-md-4"></div>
  <div class="col-md-4">
	   <p class="center titulo">Artistas</p>	
  </div>
  <div class="col-md-4"></div>
</div>

<div class="col-xs-12">
							
<?php
	include "../base/conexao.php";
	
	$data_all = mysqli_query($conexao,"SELECT * FROM ARTISTA ORDER BY ID ASC") or die(mysqli_error($conexao));
	
	while($artista = mysqli_fetch_array($data_all)){ 
		
		echo '<div class="col-xs-6 col-sm-4 col-md-2">
				<a href="artista.php?id='.$artista['id'].'" class="thumbnail text-center">
					<img src="../'.$artista['foto'].'" alt="Listen">
						<p>'.$artista['nome'].'</p>
				</a>
			</div>
		';
	}
?>				

</div>






</div>

</article>    
<?php 
	include "../base/rodape.php";
	include "../base/login.php";
?>
</body>
</html>