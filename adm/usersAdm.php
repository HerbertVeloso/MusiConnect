<?php 
include "../base/sessao.php";
include "../base/controleAdm.php";
?>
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
include "../base/modalUser.html";
?>
<!-- Corpo -->	
<article class="conteudo">

<div id="main" class="container-fluid">
			
	<!--top - Lista dos Campos-->
<hr>
<div><?php include "../base/mensagens.php"; ?></div>
	

<div class="navbar navbar-default">
	<div class="center titulo">
		<p class='nome'>Gerenciar Usuários</p>
	</div>
	<div class="navbar-bg col-md-12 text-center">
		<div class='text-right hidden-xs'>
		<br/>
		<a href="../adm/addUser.php" class='btn btn-mus'>Adicionar Usuário</a>
		</div>
		<div class='text-center visible-xs'>
		<br/>
		<a href="../adm/addUser.php" class='btn btn-mus'>Adicionar Usuário</a>
		</div>
		<div class='visible-xs'> <br/> </div>
		<?php
		
		include "../base/conexao.php";

		
		$data_all = mysqli_query($conexao,"SELECT * FROM usuario ORDER BY ID ASC") or die(mysqli_error($conexao));
	
		echo "<table class='table table-striped' cellspacing='0' cellpading='0'>";
		echo "<thead><tr align='center'>";
		echo "<td><strong>Nome</strong></td>"; 
		echo "<td><strong>E-mail</strong></td>"; 
		echo "<td><strong>Data Nascimento</strong></td>"; 
		echo "<td><strong>Sexo</strong></td>"; 
		echo "<td class='actions'><strong>Ações</strong></td>"; 
		echo "</tr></thead><tbody>";
	
		while($info = mysqli_fetch_array($data_all)){ 
		
		echo "<tr align='center'>"; //Início da Linha de um registro...
		echo "<td>".$info['nome']." ".$info['sobrenome']."</td>";		
		echo "<td>".$info['email']."</td>";
		echo "<td>".date('d-m-Y',strtotime($info['dt_nasc']))."</td>";
		echo "<td>".$info['sexo']."</td>";
		echo "<td>";
		echo "<a class='btn btn-info btn-sm' href=../adm/editaUser.php?id=".$info['id']."><span class='glyphicon glyphicon-cog' aria-hidden='true'></span></a>&nbsp;";
		echo "<a class='btn btn-danger btn-sm' onclick='deletaDado5(".$info['id'].")' data-toggle='modal' href='#delete-modal'><span class='glyphicon glyphicon-trash' aria-hidden='true'></span></a>"; 
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