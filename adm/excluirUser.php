<?php

include "../base/conexao.php";

$id = (int) @$_GET['id'];
  
$sql = "DELETE FROM `usuario` WHERE (`id` = '".$id."')";
$query = mysqli_query($conexao,$sql);

header('Location: ../adm/usersAdm.php?msg=15');
?>
