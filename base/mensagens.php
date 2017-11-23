<?php 
if(isset($_GET['msg'])){
	$msg = $_GET['msg'];
	
	switch($msg){
		case 1:
		?>
		<div class="message">
			<div class="alert alert-success">
				<a href=" " class="close" data-dismiss="alert">&times</a>
				Cadastro realizado com sucesso!
			</div>
		</div>
		<?php
		break;
		
		case 2:
		?>
		<div class="message">
			<div class="alert alert-success">
				<a href=" " class="close" data-dismiss="alert">&times</a>
				Música enviada com sucesso!
			</div>
		</div>
		<?php
		break;
		
		case 3:
		?>
		<div class="message">
			<div class="alert alert-danger">
				<a href=" " class="close" data-dismiss="alert">&times</a>
				Música excluida com sucesso!
			</div>
		</div>
		<?php
		break;
		
		case 4:
		?>
		<div class="message">
			<div class="alert alert-success">
				<a href=" " class="close" data-dismiss="alert">&times</a>
				Informações atualizadas com sucesso!
			</div>
		</div>
		<?php
		break;
		
		case 5:
		?>
		<div class="message">
			<div class="alert alert-success">
				<a href=" " class="close" data-dismiss="alert">&times</a>
				Perfil atualizado com sucesso!
			</div>
		</div>
		<?php
		break;
		
		case 6:
		?>
		<div class="message">
			<div class="alert alert-success">
				<a href=" " class="close" data-dismiss="alert">&times</a>
				E-mail alterado com sucesso!
			</div>
		</div>
		<?php
		break;
		
		case 7:
		?>
		<div class="message">
			<div class="alert alert-success">
				<a href=" " class="close" data-dismiss="alert">&times</a>
				Senha alterada com sucesso!
			</div>
		</div>
		<?php
		break;
		
		case 8:
		?>
		<div class="message">
			<div class="alert alert-success">
				<a href=" " class="close" data-dismiss="alert">&times</a>
				Artista atualizado com sucesso!
			</div>
		</div>
		<?php
		break;
		
		case 9:
		?>
		<div class="message">
			<div class="alert alert-success">
				<a href=" " class="close" data-dismiss="alert">&times</a>
				Música editada com sucesso!
			</div>
		</div>
		<?php
		break;
		
		case 10:
		?>
		<div class="message">
			<div class="alert alert-success">
				<a href=" " class="close" data-dismiss="alert">&times</a>
				Música adicionada aos favoritos com sucesso!
			</div>
		</div>
		<?php
		break;
		
		case 11:
		?>
		<div class="message">
			<div class="alert alert-danger">
				<a href=" " class="close" data-dismiss="alert">&times</a>
				E-mail já cadastrado!
			</div>
		</div>
		<?php
		break;
		
		case 12:
		?>
		<div class="message">
			<div class="alert alert-danger">
				<a href=" " class="close" data-dismiss="alert">&times</a>
				E-mail e/ou Senha incorretos!
			</div>
		</div>
		<?php
		break;
		
		case 13:
		?>
		<div class="message">
			<div class="alert alert-danger">
				<a href=" " class="close" data-dismiss="alert">&times</a>
				E-mail e/ou Senha incorretos!
			</div>
		</div>
		<?php
		break;
		
		case 14:
		?>
		<div class="message">
			<div class="alert alert-danger">
				<a href=" " class="close" data-dismiss="alert">&times</a>
				Música excluida dos favoritos com sucesso!
			</div>
		</div>
		<?php
		break;	
		
		case 15:
		?>
		<div class="message">
			<div class="alert alert-danger">
				<a href=" " class="close" data-dismiss="alert">&times</a>
			Usuário excluido com sucesso!
			</div>
		</div>
		<?php
		break;
		
		case 16:
		?>
		<div class="message">
			<div class="alert alert-success">
				<a href=" " class="close" data-dismiss="alert">&times</a>
			Usuário editado com sucesso!
			</div>
		</div>
		<?php
		break;
		
		case 17:
		?>
		<div class="message">
			<div class="alert alert-danger">
				<a href=" " class="close" data-dismiss="alert">&times</a>
			Artista excluido com sucesso!
			</div>
		</div>
		<?php
		break;
				
		case 18:
		?>
		<div class="message">
			<div class="alert alert-warning">
				<a href=" " class="close" data-dismiss="alert">&times</a>
				Música já estava em seus favoritos!
			</div>
		</div>
		<?php
		break;
	}
}
?>
