<?php
      
  // Verifica se houve POST e se o usuário ou a senha é(são) vazio(s)
  if (!empty($_POST) AND (empty($_POST['email']) OR empty($_POST['senha']))) {
      header("Location: ../index.php"); exit;
  }
  
   // Tenta se conectar ao servidor MySQL
  mysql_connect('localhost', 'root', '') or trigger_error(mysql_error());
  // Tenta se conectar a um banco de dados MySQL
  mysql_select_db('musiconnect') or trigger_error(mysql_error());
   
  $email = mysql_real_escape_string($_POST['email']);
  $senha = mysql_real_escape_string($_POST['senha']);
   
  // Validação do usuário/senha digitados
  $sql = "SELECT `id`, `nome`, `nivel` FROM `usuario` WHERE (`email` = '".$email ."') AND (`senha` = '". sha1($senha) ."') LIMIT 1";
  $query = mysql_query($sql);
  if (mysql_num_rows($query) != 1) {
      // Mensagem de erro quando os dados são inválidos e/ou o usuário não foi encontrado
      header("Location: ../base/entrar.php?msg=12"); exit;
  } else {
      // Salva os dados encontados na variável $resultado
      $resultado = mysql_fetch_assoc($query);
   
	  // Se a sessão não existir, inicia uma
      if (!isset($_SESSION)) session_start();
   
      // Salva os dados encontrados na sessão
      $_SESSION['UsuarioID'] = $resultado['id'];
      $_SESSION['UsuarioNome'] = $resultado['nome'];
      $_SESSION['UsuarioNivel'] = $resultado['nivel'];
	  
 if($resultado['nivel'] = 2){
	$sql = "SELECT `id`, `nome`, `foto` FROM `artista` WHERE (`idUser` = '".$resultado['id']."')";
	$query = mysql_query($sql);
	
	$resul = mysql_fetch_assoc($query);
   
      // Salva os dados encontrados na sessão
      $_SESSION['artistaID'] = $resul['id'];
      $_SESSION['artistaNome'] = $resul['nome'];
      $_SESSION['foto'] = $resul['foto'];
  };
	  
	  
      // Redireciona o visitante
      header("Location: ../index.php"); exit;
  }
   
   
  ?>