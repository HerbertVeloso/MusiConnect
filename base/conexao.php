<?php

    $local = "localhost";
    $usuario = "root";
    $senha = "";
    $banco = "musiconnect";

    $conexao = mysqli_connect($local,$usuario,$senha,$banco);

	//header("Content-type: text/html; charset=utf-8");
	mysqli_query($conexao,"SET NAMES 'utf8'");
	mysqli_query($conexao,"SET caracter_set_connection = utf8");
	mysqli_query($conexao,"SET caracter_set_client = utf8");
	mysqli_query($conexao,"SET caracter_set_results = utf8");
?>