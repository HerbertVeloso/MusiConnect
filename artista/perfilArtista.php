<?php
include "../base/controleArtista.php";
?>
<article class="conteudo">
<div id="main" class="container-fluid">	
	
<hr>
<div><?php include "../base/mensagens.php"; ?></div>

<div class="navbar navbar-default">
	<div class="center titulo">
		<div class="espaco-topo"></div>
		<img src="../<?php echo $_SESSION['foto']?>" class="foto">
		<p class='nome'><?php echo  $_SESSION['artistaNome'] ?></p>
	</div>
	<div class="navbar-bg col-md-12 text-center">
		<br/>
		<div class="btn-group hidden-xs">
		<a href="../musica/addMusic.php" class='btn btn-inverse'>Nova Música</a>
		<a href="../artista/centralArtista.php" class='btn btn-inverse'>Gerenciar Músicas</a>
		<a href="../artista/editaArtista.php" class='btn btn-inverse'>Editar Artista</a>
		</div>
		<div class="btn-group hidden-sm hidden-md hidden-lg">
		<a href="../musica/addMusic.php" class='btn btn-xs btn-inverse'>Nova Música</a>
		<a href="../artista/centralArtista.php" class='btn btn-xs btn-inverse'>Gerenciar Músicas</a>
		<a href="../artista/editaArtista.php" class='btn btn-xs btn-inverse'>Editar Artista</a>
		</div><br/><br/>
		
		<h3>Minhas Músicas</h3>
		<?php
		
		$data_all = mysqli_query($conexao,"SELECT * FROM MUSICA WHERE idArtista = '".$_SESSION['artistaID']."' ORDER BY ID ASC") or die(mysqli_error($conexao));
	
		echo "<table class='table table-striped' cellspacing='0' cellpading='0'>";
		echo "<thead><tr align='center'>";
		echo "<td><strong>Nome</strong></td>"; 
		echo "<td><strong>Ano</strong></td>";
		echo "<td><strong>Gênero</strong></td>";
		echo "</tr></thead><tbody>";
	
		while($info = mysqli_fetch_array($data_all)){ 
		
		echo "<tr align='center'>"; //Início da Linha de um registro...
		echo "<td>".$info['nome']."</td>";
		echo "<td>".$info['ano']." </td>";
		echo "<td>".$info['genero']."</td>";
		}
?>				

		</tr><!-- Fim da Linha é um registro...-->
		</tbody>
		</table>
	
	</div>
</div>
</div>
		

		
</article>    