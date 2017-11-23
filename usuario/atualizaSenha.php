<?php
include "../base/conexao.php";
include "../base/sessao.php";

$id				    = $_SESSION["UsuarioID"];

$senha				= $_POST["senha"];

$senha = SHA1($senha);

$sql = "UPDATE usuario SET senha='".$senha."' WHERE id='".$id."'";

$incluir = mysqli_query($conexao,$sql);

header('Location: ../usuario/perfil.php?msg=7');

?>
