
function validaSenha(input){ 
    if (input.value != document.getElementById('senha').value) {
    input.setCustomValidity('Repita a senha corretamente!');
  } else {
    input.setCustomValidity('');
  }
} 

function validaEmail(input){ 
    if (input.value != document.getElementById('email').value) {
    input.setCustomValidity('Repita o e-mail corretamente!');
  } else {
    input.setCustomValidity('');
  }
} 

function emailAntigo(input){ 
    if (input.value != document.getElementById('emailAntigo').value) {
    input.setCustomValidity('Insira o antigo e-mail corretamente!');
  } else {
    input.setCustomValidity('');
  }
} 

function deletaDado (idDado){
				//seta o caminho para quando clicar em "Sim".
				var href = "../musica/excluirMusica.php?id=" + idDado;
				//adiciona atributo de delecao ao link
				$('#confirmaDelecao').prop("href", href);
}

function deletaDado2 (idDado){
				//seta o caminho para quando clicar em "Sim".
				var href = "../favorito/excluirFav.php?id=" + idDado;
				//adiciona atributo de delecao ao link
				$('#confirmaDelecao').prop("href", href);
}

function deletaDado3 (idDado){
				//seta o caminho para quando clicar em "Sim".
				var href = "../adm/excluirMusica.php?id=" + idDado;
				//adiciona atributo de delecao ao link
				$('#confirmaDelecao').prop("href", href);
}

function deletaDado4 (idDado){
				//seta o caminho para quando clicar em "Sim".
				var href = "../adm/excluirArtista.php?id=" + idDado;
				//adiciona atributo de delecao ao link
				$('#confirmaDelecao').prop("href", href);
}

function deletaDado5 (idDado){
				//seta o caminho para quando clicar em "Sim".
				var href = "../adm/excluirUser.php?id=" + idDado;
				//adiciona atributo de delecao ao link
				$('#confirmaDelecao').prop("href", href);
}



	