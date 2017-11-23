<?php

include "../base/conexao.php";
if (isset($_POST["nome"])) {

$email            = $_POST["email"];
 
$sql = "SELECT id FROM usuario WHERE email = '$email'";
$query = mysqli_query($conexao,$sql);
if (mysqli_num_rows($query) != 1) {
  
$nome             = $_POST["nome"];
$sobrenome        = $_POST["sobrenome"];
$email            = $_POST["email"];
$dt_nasc          = $_POST["dt_nasc"];
$sexo             = $_POST["sexo"];
$senha            = $_POST["senha"];


$fdg_dt_nasc = date('Y-m-d',strtotime($dt_nasc));
$senha = sha1($senha);

$sql = "INSERT INTO USUARIO(nome,sobrenome,email,dt_nasc,sexo,senha) VALUES('$nome','$sobrenome','$email','$fdg_dt_nasc','$sexo','$senha')";
$incluir = mysqli_query($conexao,$sql);
 	
mysqli_close($conexao);

header('Location: ../index.php?msg=1');
}
else{
	
header('Location: ../base/cadastro.php?msg=11');
	
}

}
else{  

header('Location: ../base/cadastro.php');
   
}

?>