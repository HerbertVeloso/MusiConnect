<?php

include "../base/conexao.php";

$id = (int) @$_GET['id'];
  
$sql = "DELETE FROM `musica` WHERE (`id` = '".$id."')";
$query = mysqli_query($conexao,$sql);

header('Location: ../adm/musicasAdm.php?msg=3');
?>
