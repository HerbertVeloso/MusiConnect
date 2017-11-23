<?php
include "../base/conexao.php";
include "../base/sessao.php";


    if(isset($_POST['nome'])){
        $id= $_POST['id'];
        $nome = $_POST['nome'];
        $ano = $_POST['ano'];
        $genero = $_POST['genero'];
		$artista = $_POST['artista'];
        
        
        $sql = "update musica set nome='".$nome."',ano='".$ano."',genero='".$genero."',artista='".$artista."' WHERE id='".$id."'";
		
        $incluir = mysqli_query($conexao,$sql);
			
       
		header('Location: ../adm/musicasAdm.php?msg=9');
  }

?>