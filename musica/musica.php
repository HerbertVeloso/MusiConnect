<?php 
include "../base/sessao.php";
include "../base/dadosUser.php";	

if(isset($_GET['id'])){
	$music = $_GET['id'];
	
	$sql = "SELECT * FROM `musica` WHERE (`id` = '".$music."')";
	$query = mysqli_query($conexao,$sql);
	
	$info = mysqli_fetch_array($query);
}

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>MusiConnect - <?php echo $info['nome']; ?></title>
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
<div class="row juntar-topo2">
<div class="col-md-1 hidden-xs"></div>
<div class="page-header panel panel-default col-md-10 col-xs-12 text-center">

	<h2 class="center cadTit"><?php echo $info['nome']; ?></h2>
		
		<hr>
		
		<div class="row">
		
		
			<div class="col-md-1 hidden-xs"></div>
			<div class="form-group col-md-2 col-xs-12">
				<h4>Ano: <?php echo $info['ano']; ?></h4>
			</div>	
			
			<div class="form-group col-md-4 col-xs-12">
				<h4>Gênero: <?php echo $info['genero']; ?></h4>
			</div>
			
			<div class="form-group col-md-4 col-xs-12">
				<h4>Artista: <?php echo $info['artista']; ?></h4>
			</div>
	
		</div>					
		<div class="row">
		
			<div class="col-md-1 hidden-xs"></div>
			<div id="player" class="col-md-10 col-xs-12">
				<audio id="audio">
					<source src="../<?php echo $info['musica']; ?>" type="audio/mpeg">
					Seu navegador não possui suporte ao elemento audio.
				</audio>
				<div class="row" name="barra">
					<progress id="barra_progresso" max="0" value="0" class="col-md-12 col-xs-12"></progress>
				</div>
				<div class="row" name="menu">
					<div class="col-md-3 col-xs-12">
						<button class="btn btn-mus" id="play" onclick="Mplay()"><span class="glyphicon glyphicon-play" aria-hidden="true"></span></button>
		
						<button class="btn btn-mus" onclick="document.getElementById('audio').volume+=0.1"><span class="glyphicon glyphicon-volume-up" aria-hidden="true"></span></button>
		
						<button class="btn btn-mus" onclick="document.getElementById('audio').volume-=0.1"><span class="glyphicon glyphicon-volume-down" aria-hidden="true"></span></button>
			
						<button class="btn btn-mus" onclick="document.getElementById('audio').volume=0"><span class="glyphicon glyphicon-volume-off" aria-hidden="true"></span></button>
						
						<a class='btn btn-mus hidden-md hidden-lg' href="../<?php echo $info['musica']; ?>" download><span class='glyphicon glyphicon-save' aria-hidden='true'></span></a>
					</div>
					<div class="col-md-4 col-xs-6">
						<p class="text-center"><?php echo $info['nome']; ?></p>
					</div>
					<div class="col-md-4 col-xs-6 text-right">
						<span id="tempo_atual">00:00:00</span> /<span id="tempo_total">00:00:00</span>
					</div>
					<div class="col-md-1">	
						<a class='btn btn-mus btn-sm hidden-xs hidden-sm' href="../<?php echo $info['musica']; ?>" download><span class='glyphicon glyphicon-save' aria-hidden='true'></span></a>
					</div>
				</div>
			</div>

		</div>
		
		<br/>
		
			
</div>
<div class="col-md-1 hidden-xs"></div>
</div>
<script type="text/javascript" src="../js/musica.js"></script>

</div>
</article>    
<?php 
	include "../base/rodape.php";
	include "../base/login.php";
?>
</body>
</html>