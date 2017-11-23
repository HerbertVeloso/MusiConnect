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
			
	<!--top - Lista dos Campos-->
<hr>
<div><?php include "../base/mensagens.php"; ?></div>
	
	
<div class="navbar navbar-default">
  <div class="col-md-4"></div>
  <div class="col-md-4">
	   <p class="center titulo">Músicas</p>	
  </div>
  <div class="col-md-4"></div>
</div>
	
<div id="bloco-list-pag" class="text-center">	

	<div id="list" class="row">
		<div class="table-responsive col-xs-12">
			
				
<?php
	include "../base/conexao.php";
	
	$quantidade = 10;
	
	$pagina = (isset($_GET['pagina'])) ? (int)$_GET['pagina'] : 1;
	$inicio = ($quantidade * $pagina) - $quantidade;
	
	
	$data_all = mysqli_query($conexao,"SELECT * FROM MUSICA ORDER BY ID ASC LIMIT $inicio, $quantidade;") or die(mysqli_error($conexao));
	
	echo "<table class='table table-striped' cellspacing='0' cellpading='0'>";
	echo "<thead><tr align='center'>";
	echo "<td><strong>Nome</strong></td>"; 
	echo "<td><strong>Artista</strong></td>"; 
	echo "<td><strong>Ano</strong></td>";
	echo "<td><strong>Gênero</strong></td>";
	echo "<td class='actions'><strong>Ações</strong></td>"; 
	echo "</tr></thead><tbody>";
	
	while($info = mysqli_fetch_array($data_all)){ 
		
		echo "<tr align='center'>"; //Início da Linha de um registro...
		echo "<td>".$info['nome']."</td>";
		echo "<td>".$info['artista']."</td>";
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
</div><!--list-->

										<!-- PAGINAÇÃO -->
	<div id="bottom" class="row">
		<div class="col-xs-12">

			<ul class="pagination">
			<?php 
				$sqlTotal 		= "SELECT ID FROM MUSICA;";
				$qrTotal  		= mysqli_query($conexao,$sqlTotal) or die (mysqli_error($conexao));
				$numTotal 		= mysqli_num_rows($qrTotal);
				$totalpagina = (ceil($numTotal/$quantidade)<=0) ? 1 : ceil($numTotal/$quantidade);
				
				
				$exibir = 4;
				
				$anterior = (($pagina-1) <= 0) ? 1 : $pagina - 1;
				$posterior = (($pagina+1) >= $totalpagina) ? $totalpagina : $pagina+1;
				
				echo "<li class='first'><a href='?pagina=1'> Primeira</a></li> "; 
				echo "<li class='previous'><a href=\"?pagina=$anterior\"> Anterior</a></li> ";
				

					echo '<li><a href="?pagina='.$pagina.'"><strong>'.$pagina.'</strong></a></li> ';
					
				for($i = $pagina+1; $i < $pagina+$exibir; $i++){
					if($i <= $totalpagina)
						echo '<li><a href="?pagina='.$i.'"> '.$i.' </a></li> ';
					}
					
				echo "<li class='next'><a href=\"?pagina=$posterior\"> Pr&oacute;xima</a></li> ";
				echo "<li class='last'><a href=\"?pagina=$totalpagina\"> &Uacute;ltima</a></li>";
			
			?>	
			</ul>
		</div>
	</div><!--bottom-->
</div>
</div><!--main-->


</article>    
<?php 
	include "../base/rodape.php";
	include "../base/login.php";
?>
</body>
</html>