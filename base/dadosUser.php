<?php
	include "conexao.php";
	
	if(!isset($_SESSION)){
		session_start();
	}
	
	if($_SESSION){
		$id = $_SESSION['UsuarioID'];
   
		$sql = "select * from usuario where id=$id";
		$seleciona = mysqli_query($conexao,$sql);
		$dados = mysqli_fetch_array ($seleciona);
	};
	
?>