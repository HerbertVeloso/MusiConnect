<?php

include "base/conexao.php";
include "../base/dadosUser.php";

$idMusic = (int) @$_GET['id'];
  
$idUser = $_SESSION['UsuarioID'];
  
$sql = "DELETE FROM favorito WHERE (idMusic = '".$idMusic."') and (idUser = '".$idUser."')";
$query = mysqli_query($conexao,$sql);

header('Location: ../favorito/favoritos.php?msg=14');
?>
