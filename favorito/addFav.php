<?php

include "../base/conexao.php";
include "../base/dadosUser.php";

    if(isset($_GET['id'])){
        $idMusic = $_GET['id'];

		$idUser = $_SESSION['UsuarioID'];
				 
				 
		$sql = "SELECT * FROM favorito WHERE (idMusic = '".$idMusic."') and (idUser = '".$idUser."')";
		$query = mysqli_query($conexao,$sql);
		if (mysqli_num_rows($query) == 1) {
			header('Location: ../favorito/favoritos.php?msg=18');
		}
		else{
        $sql2 = "insert into favorito(idMusic,idUser) values('$idMusic','$idUser')";
		
        $incluir = mysqli_query($conexao,$sql2) or die;
				
		header('Location: ../favorito/favoritos.php?msg=10');
		}
               
  }
?>