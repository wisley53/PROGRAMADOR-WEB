<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="icon" href="images/favicon.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Currículo online </title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/estilo-tela-principal.css" rel="stylesheet">
	
	<style> 
	
	body {
	background:#f5f5f5;
	}
	ul li {
    display: inline-block;
	padding-left:5px;
	padding-right:5px;

}
	
	</style>
	
    </head>
  <body>
  <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">CURRÍCULO ONLINE</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="modelos.php">modelos</a></li>
            <li><a href="perfil.php">Perfil</a></li>
			<li><a href="cadastrar.php">cadastrar Usúario</a></li>
			<li><a href="adicionar.php">Adicionar currículo</a></li>
			<li><a href="sobre.php">Sobre</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
	
	
	
	<div class="content-wrapper">
	
	<?php
		
		if(isset($_GET["modulo"])) { $modulo = $_GET["modulo"];} else { $modulo =  "dashboard";}
		if(isset($_GET["acao"])){ $acao= $_GET["acao"];} else {$acao= "ver";}
		
		if($modulo)
			if(file_exists("Curriculo_web/".$modulo."/".$acao.".php")) {
				include("Curriculo_web/".$modulo."/".$acao.".php");
			}else{
				echo "A pagina nao existe";
				
			}
			
		
		
		?>
		
	
	</div>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	<!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h1>Currículo online</h1>
        <p>Faça o seu cadastro e deixe o seu currículo visível para empresas e profissionais.</p>
        <p><a class="btn btn-primary btn-lg" href="cadastrar.php" role="button">Cadastre-se &raquo;</a></p>
      </div>
    </div>
	
	
	 	  <ul>
     <li>
        <img width="390px"  height="290px" src="images/foto1.png">
    </li>
    <li>
        <img  width="390px"  height="290px" src="images/foto2.jpg">
    </li>
	
	  <li>
        <img width="390px"  height="290px" src="images/foto3.png">
    </li>
	
	</ul>

	
	<footer class="footer">
		<div class="container">
			<p> Wisley santos de Oliveira &copy; 2018. </p>
		</div>
	</footer>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>