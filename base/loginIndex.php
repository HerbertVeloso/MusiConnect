<?php

echo '
<div class="modal fade" id="LoginModal2" tabindex="-1" role="dialog" aria-labelledby="modalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Fechar"><span aria-hidden="true">&times;</span></button>
				<h2 class="modal-title cadTit" id="modalLabel"><center>Entrar</center></h2>
			</div>
			<div class="modal-body">
				<form  name="signup" method="post" action="base/valida.php">
					<center>
					<label>E-mail: </label>
					<input type="email" class="form-control" name="email" required><br/>
		
					<label>Senha: </label>
					<input type="password" class="form-control" name="senha" required><br/>
		
					<button type="submit" class="btn btn-inverse">Entrar</button>
		
					</center>
				</form>
			</div>
			<div class="modal-footer">
				<center> <a href="senha.php">Esqueceu a senha?</a> </center>
			</div>
		</div>
	</div>
</div>
';



?>