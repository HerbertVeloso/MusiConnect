<?php 
include "../base/sessao.php";
include "../base/dadosUser.php";	

if(isset($_GET['id'])){
	$artista = $_GET['id'];
	
	$sql = "SELECT * FROM `artista` WHERE (`id` = '".$artista."')";
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
<div class="navbar navbar-default">
	<div class="center titulo">
		<div class="espaco-topo"></div>
		<img src="../<?php echo $info['foto']?>" class="foto">
		<p class='nome'><?php echo  $info['nome'] ?></p>
	</div>
	<div class="navbar-bg col-md-12 text-center">
			
		<h3>Músicas</h3>
		<?php

		$data_all = mysqli_query($conexao,"SELECT * FROM MUSICA WHERE idArtista = '".$info['id']."' ORDER BY ID ASC") or die(mysqli_error($conexao));
	
		echo "<table class='table table-striped' cellspacing='0' cellpading='0'>";
		echo "<thead><tr align='center'>";
		echo "<td><strong>Nome</strong></td>"; 
		echo "<td><strong>Ano</strong></td>";
		echo "<td><strong>Gênero</strong></td>";
		echo "<td class='actions'><strong>Ações</strong></td>"; 
		echo "</tr></thead><tbody>";
	
		while($info = mysqli_fetch_array($data_all)){ 
		
		echo "<tr align='center'>"; //Início da Linha de um registro...
		echo "<td>".$info['nome']."</td>";
		echo "<td>".$info['ano']." </td>";
		echo "<td>".$info['genero']."</td>";
		echo "<td>";
		echo "<a class='btn btn-success btn-sm' href=../musica/musica.php?id=".$info['id']."><span class='glyphicon glyphicon-play' aria-hidden='true'></span></a>&nbsp;";
		echo "<a class='btn btn-info btn-sm' href=../".$info['musica']." download><span class='glyphicon glyphicon-save' aria-hidden='true'></span></a>&nbsp;";
		if(isset($_SESSION['UsuarioID'])){
				echo "<a  class='btn btn-warning btn-sm' href=../favorito/addFav.php?id=".$info['id']."><span class='glyphicon glyphicon-star' aria-hidden='true'></span></a>";
			}
		echo "</td>";
		}
?>				

		</tr><!-- Fim da Linha é um registro...-->
		</tbody>
		</table>
	
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