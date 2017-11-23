<?php
	include "../base/sessao.php";
	include "../base/controleUser.php";
?>
<article class="conteudo">

	<div id="main" class="container-fluid">	
	<hr>
		<!-- Cadastro do site -->
		<div class="row juntar-topo">
		<div class="col-md-1 hidden-xs"></div>
		<div id="cadastro" class="page-header panel panel-default col-md-10 col-xs-12">
			<h2 class="center cadTit">Criar Pseudônimo Artistico</h2>
			<hr>
		
		<form method="POST" action="../artista/criarArtista.php" enctype="multipart/form-data" >
		<!-- area de campo do form -->	
				<!-- Linha 1 -->
			<div class="row"><br/>
				<div class="col-md-1"></div>
				
				<div class="form-group col-md-10 col-xs-12">
					<label for="nome">Nome Artistico</label>
					<input type="text" class="form-control" name="nome" maxlength="50" required>
				</div>
				
				<div class="col-md-1"></div>
			</div>
			<!-- Lnha 2 -->
			<div class="row"><br/>
                <div class="col-md-1"></div>
                
				<div class="form-group col-md-10 col-xs-12">
					<label for="foto">Foto</label>
					<input type="file" class="form-control" name="foto" required>
				</div>
                
                <div class="col-md-1"></div>
			</div>

			<hr>
			
			<div id="actions" class="row">
				<div class="col-md-12">
				<center>
					<a href="../index.php" class="btn btn-default">Cancelar</a>
					<button type="submit" class="btn btn-mus">Criar</button>
				</center>
				</div>
				
			</div>
		</div>
		</form>
		
		<div class="col-md-1 hidden-xs"></div>
		</div>
		
</article>    