<?php
include "../base/conexao.php";
include "../base/sessao.php";


    if(isset($_POST['nome'])){
        $nome = $_POST['nome'];
        
        //recebimento da foto
        $nomeFoto = $_FILES['foto']['name'];
        $type = $_FILES['foto']['type'];
        $tamanho = $_FILES['foto']['size'];
        $temp = $_FILES['foto']['tmp_name'];
        $erro = $_FILES['foto']['error'];

		$id = $_SESSION['artistaID'];

		
        $tot = strlen($nomeFoto);
        $y = $tot-3;
        $extensao = strtolower(substr($nomeFoto,$y,$tot));    

		$nome2 = strtolower($nome);
		$nomeFoto = $nome2.".".$extensao;		

		$nomeFoto = str_replace(" ","_",$nomeFoto);
		$nomeFoto = str_replace("ç","c",$nomeFoto);
		$nomeFoto = str_replace("é","e",$nomeFoto);
        $nomeFoto = str_replace("ê","e",$nomeFoto);
		
        $caminho_tmp = $_FILES['foto']['tmp_name'];
        $caminho = 'imagens/artista/';
		        
        $foto = $caminho.$nomeFoto;
        
        
        $sql = "update artista set nome='".$nome."',foto='".$foto."' WHERE id='".$id."'";
		
        $incluir = mysqli_query($conexao,$sql);
			
        
        if ($erro == 0) {
                    
            if (($extensao != 'jpg') && ($extensao != 'png')){
                        $erro = 'O arquivo não foi enviado. O tipo de arquivo enviado é inválido!';
                    
            } 
            else {
                    if($incluir){
						
						$foto = "../".$foto;
                        move_uploaded_file($caminho_tmp,$foto);
						

                    }
                    else{
                        echo "
                            <script>
                            <p> Banco de Dados temporiamente fora do ar. Tente novamente mais tarde. </p>
                            <p> Entre em contato com o administrador do site. </p>
                            ";
                            echo mysqli_error($conexao);
            
                            echo "<p> <a href='estudio.php'> Voltar </a> </p> 
			                 </script>";
                    }
        
            }
        }
		
		$idUser = $_SESSION['UsuarioID'];
			
		$sql2 = "SELECT `id`, `nome`, `foto` FROM `artista` WHERE (`idUser` = '".$idUser."')";
		$query2 = mysqli_query($conexao,$sql2);
	
		$resul = mysqli_fetch_array($query2);
   
		// Salva os dados encontrados na sessão
		$_SESSION['artistaID'] = $resul['id'];
		$_SESSION['artistaNome'] = $resul['nome'];
		$_SESSION['foto'] = $resul['foto'];
	 
		
		header('Location: estudio.php?msg=8');

  }

?>