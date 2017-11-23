<?php
include "../base/conexao.php";
include "../base/sessao.php";

$id				    = $_SESSION["UsuarioID"];

$email				= $_POST["email"];

$sql = "UPDATE usuario SET email='".$email."' WHERE id='".$id."'";

$incluir = mysqli_query($conexao,$sql);

header('Location: ../usuario/perfil.php?msg=6');

?>
