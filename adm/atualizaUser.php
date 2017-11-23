<?php
include "../base/conexao.php";
include "../base/sessao.php";

$id				    = $_POST["id"];

$nome				= $_POST["nome"];
$sobrenome  	    = $_POST["sobrenome"];
$dt_nasc     	    = $_POST["dt_nasc"];
$email				= $_POST["email"];

$fdg_dt_nasc = date('Y-m-d',strtotime($dt_nasc)); 

$sql = "UPDATE usuario SET nome='".$nome."',sobrenome='".$sobrenome."',dt_nasc='".$fdg_dt_nasc."',email='".$email."' WHERE id='".$id."'";

$incluir = mysqli_query($conexao,$sql);

header('Location: ../adm/usersAdm.php?msg=16');

?>
