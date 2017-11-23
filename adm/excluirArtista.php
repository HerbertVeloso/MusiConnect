<?php

include "../base/conexao.php";

$id = (int) @$_GET['id'];

$sql = mysqli_query($conexao,"SELECT * FROM artista WHERE id = '".$id."';");
$row = mysqli_fetch_array($sql);
  
$idUser = $row['idUser'];
  
$sql = "DELETE FROM `artista` WHERE (`id` = '".$id."')";
$query = mysqli_query($conexao,$sql);



$sql2 = "update usuario set nivel = 1 where id = $idUser";
$update = mysqli_query($conexao,$sql2);

header('Location: ../adm/artistasAdm.php?msg=17');
?>
