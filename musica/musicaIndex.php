<?php 
include "base/conexao.php";

if(isset($_GET['id'])){
	$music = $_GET['id'];
	
	$sql3 = "SELECT * FROM `musica` WHERE (`id` = '".$music."')";
	$query3 = mysqli_query($conexao,$sql3);
	
	$info3 = mysqli_fetch_array($query3);


?>
<div class="row juntar-topo2">
<div class="col-md-1 hidden-xs"></div>
<div class="page-header panel panel-default col-md-10 col-xs-12 text-center">

	<h2 class="center cadTit"><?php echo $info3['nome']; ?></h2>
		
		<hr>
		
		<div class="row">
		
		
			<div class="col-md-1 hidden-xs"></div>
			<div class="form-group col-md-2 col-xs-12">
				<h4>Ano: <?php echo $info3['ano']; ?></h4>
			</div>	
			
			<div class="form-group col-md-4 col-xs-12">
				<h4>Gênero: <?php echo $info3['genero']; ?></h4>
			</div>
			
			<div class="form-group col-md-4 col-xs-12">
				<h4>Artista: <?php echo $info3['artista']; ?></h4>
			</div>
	
		</div>					
		<div class="row">
		
			<div class="col-md-1 hidden-xs"></div>
				<div id="player" class="col-md-10 col-xs-12">
				<audio id="audio">
					<source src="<?php echo $info3['musica']; ?>" type="audio/mpeg">
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
						
						<a class='btn btn-mus hidden-md hidden-lg' href="<?php echo $info3['musica']; ?>" download><span class='glyphicon glyphicon-save' aria-hidden='true'></span></a>
					</div>
					<div class="col-md-4 col-xs-6">
						<p class="text-center"><?php echo $info3['nome']; ?></p>
					</div>
					<div class="col-md-4 col-xs-6 text-right">
						<span id="tempo_atual">00:00:00</span> /<span id="tempo_total">00:00:00</span>
					</div>
					<div class="col-md-1">	
						<a class='btn btn-mus btn-sm hidden-xs hidden-sm' href="<?php echo $info3['musica']; ?>" download><span class='glyphicon glyphicon-save' aria-hidden='true'></span></a>
					</div>
				</div>
			</div>

		</div>
		
		<br/>
		
			
</div>
<div class="col-md-1 hidden-xs"></div>
</div>
<script type="text/javascript" src="js/musica.js"></script>
<?php

}

?>

<!--
<audio id="musica" src="<?php echo $info['musica']; ?>" autoplay></audio>
<div class="btn-group" >
  <button class="btn btn-mus" onclick="document.getElementById('musica').play()"><span class="glyphicon glyphicon-play" aria-hidden="true"></span></button>
  <button class="btn btn-mus" onclick="document.getElementById('musica').pause()"><span class="glyphicon glyphicon-pause" aria-hidden="true"></span></button>
  <span class="btn" aria-hidden="true"><?php echo $info['nome']; ?></span>
  <button class="btn btn-mus" onclick="document.getElementById('musica').volume+=0.1"><span class="glyphicon glyphicon-volume-up" aria-hidden="true"></span></button>
  <button class="btn btn-mus" onclick="document.getElementById('musica').volume-=0.1"><span class="glyphicon glyphicon-volume-down" aria-hidden="true"></span></button>
</div>
-->