<?php
    include "../base/conexao.php";
	
	if (!isset($_SESSION)) session_start();
    
    if(isset($_POST['genero'])){
        $nome = trim($_POST['nome']);
        $genero = trim($_POST['genero']);
        $ano = trim($_POST['ano']);
 
        
        //recebimento da musica
        $nome_musica = $_FILES['musica']['name'];
        $type = $_FILES['musica']['type'];
        $tamanho = $_FILES['musica']['size'];
        $temp = $_FILES['musica']['tmp_name'];
        $erro = $_FILES['musica']['error'];

		$artista = $_POST['artista'];
		//$idArtista = $_SESSION['artistaID'];
		
		$nome_musica = str_replace(" ","_",$nome_musica);
		$nome_musica = str_replace("ç","c",$nome_musica);
		$nome_musica = str_replace("é","e",$nome_musica);
        $nome_musica = str_replace("ê","e",$nome_musica);
		
        $tot = strlen($nome_musica);
        $y = $tot-3;
        $extensao = strtolower(substr($nome_musica,$y,$tot));                

		
        $caminho_tmp = $_FILES['musica']['tmp_name'];
        $caminho = 'musicas/';
		        
        $musica = $caminho.$nome_musica;
        
        
        $sql = "insert into musica(nome,genero,ano,artista,musica) values('$nome','$genero','$ano','$artista','$musica')";
        $incluir = mysqli_query($conexao,$sql);
        
        if ($erro == 0) {
                    
            if (($extensao != 'mp3') && ($extensao != 'mp4') && ($extensao != 'wav') && ($extensao != 'wma')){
                        $erro = 'O arquivo não foi enviado. O tipo de arquivo enviado é inválido!';
                    
            } 
            else {
                    if($incluir){
						$musica = "../".$musica;
                        move_uploaded_file($caminho_tmp,$musica);
                        echo"
                            <script>
                            window.location='../adm/musicasAdm.php?msg=2';
                            </script>
                            ";
                    }
                    else{
                        echo "
                            <script>
                            <p> Banco de Dados temporiamente fora do ar. Tente novamente mais tarde. </p>
                            <p> Entre em contato com o administrador do site. </p>
                            ";
                            echo mysqli_error($conexao);
            
                            echo "<p> <a href='../adm/musicasAdm.php'> Voltar </a> </p> 
			                 </script>";
                    }
        
            }
        }
    }
	else{
		echo"Erro";
	}
                


?>