<?php 
include "../base/sessao.php";
include "../base/dadosUser.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>MusiConnect - Estúdio</title>
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
<div class="espaco-topo"></div>

<?php
$nivelUser = 1;
$nivelArtista = 2;
if ($_SESSION['UsuarioNivel'] ==$nivelUser) {
	include "formArtista.php";
}
elseif ($_SESSION['UsuarioNivel'] ==$nivelArtista) {
	include "../artista/perfilArtista.php";
}
else{
	header("Location: ../index.php"); exit;
}

?>

</article>    
<?php 
	include "../base/rodape.php";
	include "../base/login.php";
?>
</body>
</html>