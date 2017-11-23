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
	<title>MusiConnect - Favoritos</title>
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
include "../base/modalFav.html";
?>
<!-- Corpo -->	
<article class="conteudo">

<div id="main" class="container-fluid">	
	
<hr>
<div><?php 
include "../base/mensagens.php"; 

include "../musica/musicaFav.php";
?></div><div id="playlist">

	<div class="navbar navbar-default">
  <div class="col-md-4"></div>
  <div class="col-md-4">
	   <p class="center titulo">Favoritos</p>	
  </div>
  <div class="col-md-4"></div>
</div>
      
<div id="list" class="row">

<div class="table-responsive col-xs-12">
							
<?php
	//include "../base/conexao.php";
	
	$idUser = $_SESSION['UsuarioID'];
	
	
	$sql = "SELECT idMusic FROM favorito WHERE idUser = '$idUser'";
	$query = mysqli_query($conexao,$sql);
	if (mysqli_num_rows($query) == 0) {
		echo '<div class="message">
			<div class="alert alert-warning">
				<a href=" " class="close" data-dismiss="alert">&times</a>
				Nenhuma música em seus favoritos!
			</div>
		</div>';
	}
	else{
			
	$data_all = mysqli_query($conexao,"SELECT * FROM favorito WHERE idUser = ".$idUser) or die(mysqli_error($conexao));
	
	echo "<table class='table table-striped' cellspacing='0' cellpading='0'>";
	echo "<thead><tr align='center'>";
	echo "<td><strong>Nome</strong></td>"; 
	echo "<td><strong>Artista</strong></td>"; 
	echo "<td class='hidden-xs'><strong>Ano</strong></td>";
	echo "<td class='hidden-xs'><strong>Gênero</strong></td>";
	echo "<td class='actions'><strong>Ações</strong></td>"; 
	echo "</tr></thead><tbody>";
	
	while($recebe = mysqli_fetch_array($data_all)){ 
	
	$idMusica = $recebe['idMusic'];
	
	$pega = mysqli_query($conexao,"SELECT * FROM musica WHERE ID = ".$idMusica) or die(mysqli_error($conexao));
		
	$info = mysqli_fetch_array($pega);
	
		echo "<tr align='center'>"; //Início da Linha de um registro...
		echo "<td>".$info['nome']."</td>";
		echo "<td>".$info['artista']."</td>";
		echo "<td class='hidden-xs'>".$info['ano']." </td>";
		echo "<td class='hidden-xs'>".$info['genero']."</td>";
		echo "<td>";
		echo "<a class='btn btn-success btn-sm' href=../favorito/favoritos.php?id=".$info['id']."><span class='glyphicon glyphicon-play' aria-hidden='true'></span></a>&nbsp;";
		echo "<a class='btn btn-info btn-sm' href=../".$info['musica']." download><span class='glyphicon glyphicon-save' aria-hidden='true'></span></a>&nbsp;";
		echo "<a class='btn btn-danger btn-sm' onclick='deletaDado2(".$info['id'].")' data-toggle='modal' href='#delete-modal'><span class='glyphicon glyphicon-trash' aria-hidden='true'></span></a>"; 
		echo "</td>";
	}
?>				

		</tr><!-- Fim da Linha é um registro...-->
	</tbody>
	</table>

	<?php }; ?>
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