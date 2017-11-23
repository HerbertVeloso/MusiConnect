<?php 
include "base/sessao.php"; 
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>MusiConnect</title>
    <link rel="shortcut icon" href="imagens/favicon.png">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/estilo.css" rel="stylesheet">
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/functions.js"></script>
</head>
<body>
<!-- Menu -->
<?php
include "base/menuIndex.php";
?>
<!-- Corpo -->	
<article class="conteudo">
<div id="main" class="container-fluid">
<hr class="hr">
<div><?php 
include "base/mensagens.php"; 

include "musica/musicaIndex.php";
?></div>

<div id="bloco-list-pag">	

<div class="navbar navbar-default">
  <div class="col-md-4"></div>
  <div class="col-md-4">
	   <p class="center titulo">LANÇAMENTOS</p>	
  </div>
  <div class="col-md-4"></div>

</div>
			
<div id="list" class="row">

<div class="table-responsive col-xs-12">
							
<?php
	include "base/conexao.php";
	
	$quantidade = 10;
		
	$data_all = mysqli_query($conexao,"SELECT * FROM MUSICA ORDER BY ID DESC LIMIT $quantidade;") or die(mysqli_error($conexao));
	
	echo "<table class='table table-striped' cellspacing='0' cellpading='0'>";
	echo "<thead><tr align='center'>";
	echo "<td><strong>Nome</strong></td>"; 
	echo "<td><strong>Artista</strong></td>"; 
	echo "<td class='hidden-xs'><strong>Ano</strong></td>";
	echo "<td class='hidden-xs'><strong>Gênero</strong></td>";
	echo "<td class='actions'><strong>Ações</strong></td>"; 
	echo "</tr></thead><tbody>";
	
	while($info = mysqli_fetch_array($data_all)){ 
		
		echo "<tr align='center'>"; //Início da Linha de um registro...
		echo "<td>".$info['nome']."</td>";
		echo "<td>".$info['artista']."</td>";
		echo "<td class='hidden-xs'>".$info['ano']." </td>";
		echo "<td class='hidden-xs'>".$info['genero']."</td>";
		echo "<td>";
		echo "<a class='btn btn-success btn-sm' href=index.php?id=".$info['id']."><span class='glyphicon glyphicon-play' aria-hidden='true'></span></a>&nbsp;";
		echo "<a class='btn btn-info btn-sm' href=".$info['musica']." download><span class='glyphicon glyphicon-save' aria-hidden='true'></span></a>&nbsp;";
		if(isset($_SESSION['UsuarioID'])){
				echo "<a  class='btn btn-warning btn-sm' href=favorito/addFav.php?id=".$info['id']."><span class='glyphicon glyphicon-star' aria-hidden='true'></span></a>";
			}
		echo "</td>";
	}
?>				

		</tr><!-- Fim da Linha é um registro...-->
	</tbody>
	</table>

</div>

</div>






<div class="navbar navbar-default">
  <div class="col-md-4"></div>
  <div class="col-md-4">
	   <p class="center titulo">NOVOS ARTISTAS</p>	
  </div>
  <div class="col-md-4"></div>

</div>
	
<div class="col-xs-12">
							
<?php
	
	$quant = 6;
	$data_all = mysqli_query($conexao,"SELECT * FROM ARTISTA ORDER BY ID DESC LIMIT ".$quant) or die(mysqli_error($conexao));
	
	
	while($artista = mysqli_fetch_array($data_all)){ 
		
		echo '<div class="col-xs-6 col-sm-4 col-md-2">
				<a href="artista/artista.php?id='.$artista['id'].'" class="thumbnail text-center">
					<img src="'.$artista['foto'].'" alt="'.$artista['nome'].'">
						<p>'.$artista['nome'].'</p>
				</a>
			</div>
		';
	}
?>				

</div>
</div>

</div>

</article>    
<?php 
	include "base/rodape.php";
	include "base/loginIndex.php";
?>
</body>
</html>