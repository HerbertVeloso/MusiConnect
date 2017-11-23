<?php
include "../base/conexao.php";
include "../base/sessao.php";

$id				    = $_SESSION["UsuarioID"];

$nome				= $_POST["nome"];
$sobrenome  	    = $_POST["sobrenome"];
$dt_nasc     	    = $_POST["dt_nasc"];

$fdg_dt_nasc = date('Y-m-d',strtotime($dt_nasc)); 

$sql = "UPDATE usuario SET nome='".$nome."',sobrenome='".$sobrenome."',dt_nasc='".$fdg_dt_nasc."' WHERE id='".$id."'";

$incluir = mysqli_query($conexao,$sql);

header('Location: ../usuario/perfil.php?msg=5');

?>
