<?php
header("Content-type: text/html; charset=utf-8");

if(isset($_SESSION['UsuarioID'])){
$nome = $_SESSION['UsuarioNome'];
$nivel = $_SESSION['UsuarioNivel'];

if($nivel == 3){

echo "
<nav class='navbar navbar-inverse navbar-fixed-top'>
<div class='container-fluid'>
	<div class='navbar-header'>
		  <button type='button' class='navbar-toggle collapsed' data-toggle='collapse' data-target='#bs-example-navbar-collapse-1' aria-expanded='false'>
			<span class='sr-only'>Toggle navigation</span>
			<span class='icon-bar'></span>
			<span class='icon-bar'></span>
			<span class='icon-bar'></span>
		  </button>
     	  <a class='navbar-brand' href='../index.php'>
			<img alt='MusiConnect' src='../imagens/nav.png'>
			</a>
    </div>
    <div class='collapse navbar-collapse' id='bs-example-navbar-collapse-1'>
		<form class='navbar-form navbar-left' action='../base/pesquisa.php'>
        <div class='form-group input-group'>
           <input name='pesquisa' class='form-control' id='search' type='search' placeholder='Pesquisar'>
            <span class='input-group-btn'>
                <button class='btn btn-mus' type='submit'>
                <span class='glyphicon glyphicon-search'> </span>
                </button>
            </span>
        </div>
        
      </form>
		<ul class='nav navbar-nav navbar-right'>
		<li><a href='../usuario/perfil.php'>".$nome."</a></li>
		<li class='dropdown'>
          <a href='#' class='dropdown-toggle' data-toggle='dropdown' role='button' aria-haspopup='true' aria-expanded='false'>Menu <span class='glyphicon glyphicon-menu-down'></span></a>
          <ul class='dropdown-menu'>
		    <li><a href='../musica/musicas.php'>Músicas</a></li>
			<li><a href='../artista/artistas.php'>Artistas</a></li>
            <li role='separator' class='divider'></li>
            <li><a href='../favorito/favoritos.php'>Meus Favoritos</a></li>
            <li role='separator' class='divider'></li>
            <li><a href='../adm/adm.php'>Painel de Controle</a></li>
            <li role='separator' class='divider'></li>
            <li><a href='../base/logout.php'>Sair</a></li>
          </ul>
        </li>
        </ul>
    </div>
</div>
</nav>
";
	
}
else{

echo "
<nav class='navbar navbar-inverse navbar-fixed-top'>
<div class='container-fluid'>
	<div class='navbar-header'>
		  <button type='button' class='navbar-toggle collapsed' data-toggle='collapse' data-target='#bs-example-navbar-collapse-1' aria-expanded='false'>
			<span class='sr-only'>Toggle navigation</span>
			<span class='icon-bar'></span>
			<span class='icon-bar'></span>
			<span class='icon-bar'></span>
		  </button>
     	  <a class='navbar-brand' href='../index.php'>
			<img alt='MusiConnect' src='../imagens/nav.png'>
			</a>
    </div>
    <div class='collapse navbar-collapse' id='bs-example-navbar-collapse-1'>
		<form class='navbar-form navbar-left' action='../base/pesquisa.php'>
        <div class='form-group input-group'>
           <input name='pesquisa' class='form-control' id='search' type='search' placeholder='Pesquisar'>
            <span class='input-group-btn'>
                <button class='btn btn-mus' type='submit'>
                <span class='glyphicon glyphicon-search'> </span>
                </button>
            </span>
        </div>
        
      </form>
		<ul class='nav navbar-nav navbar-right'>
		<li><a href='../usuario/perfil.php'>".$nome."</a></li>
		<li class='dropdown'>
          <a href='#' class='dropdown-toggle' data-toggle='dropdown' role='button' aria-haspopup='true' aria-expanded='false'>Menu <span class='glyphicon glyphicon-menu-down'></span></a>
          <ul class='dropdown-menu'>
		    <li><a href='../musica/musicas.php'>Músicas</a></li>
			<li><a href='../artista/artistas.php'>Artistas</a></li>
            <li role='separator' class='divider'></li>
            <li><a href='../artista/estudio.php'>Meu Estúdio</a></li>
            <li><a href='../favorito/favoritos.php'>Meus Favoritos</a></li>
            <li role='separator' class='divider'></li>
            <li><a href='../base/logout.php'>Sair</a></li>
          </ul>
        </li>
        </ul>
    </div>
</div>
</nav>

";
};

}
else{ 
echo "
<nav class='navbar navbar-inverse navbar-fixed-top'>
<div class='container-fluid'>
	<div class='navbar-header'>
		  <button type='button' class='navbar-toggle collapsed' data-toggle='collapse' data-target='#bs-example-navbar-collapse-1' aria-expanded='false'>
			<span class='sr-only'>Toggle navigation</span>
			<span class='icon-bar'></span>
			<span class='icon-bar'></span>
			<span class='icon-bar'></span>
		  </button>
     	  <a class='navbar-brand' href='../index.php'>
			<img alt='MusiConnect' src='../imagens/nav.png'>
			</a>
    </div>
    <div class='collapse navbar-collapse' id='bs-example-navbar-collapse-1'>
	<form class='navbar-form navbar-left' action='../base/pesquisa.php'>
        <div class='form-group input-group'>
           <input name='data[search]' class='form-control' id='search' type='search' placeholder='Pesquisar'>
            <span class='input-group-btn'>
                <button class='btn btn-mus' type='submit'>
                <span class='glyphicon glyphicon-search'> </span>
                </button>
            </span>
        </div>
      </form>
		<ul class='nav navbar-nav navbar-right'>
        <li><a href='../base/cadastro.php'>Cadastrar</a></li>
        <li><a href='#LoginModal' role='button' data-toggle='modal'>Entrar</a></li>
		<li class='dropdown'>
          <a href='#' class='dropdown-toggle' data-toggle='dropdown' role='button' aria-haspopup='true' aria-expanded='false'>Menu <span class='glyphicon glyphicon-menu-down'></span></a>
          <ul class='dropdown-menu'>
		    <li><a href='../musica/musicas.php'>Músicas</a></li>
			<li><a href='../artista/artistas.php'>Artistas</a></li>
          </ul>
        </ul>
    </div>
</div>
</nav>
";

}

?>