<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="icon" href="images/favicon.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Modelos </title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/estilo-tela-principal.css" rel="stylesheet">
	
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
            <li><a href="tela_principal.php">Home</a></li>
            <li><a href="modelos.php">modelos</a></li>
            <li class="active"><a href="#">Perfil</a></li>
			<li><a href="cadastrar.php">cadastrar Usúario</a></li>
			<li><a href="adicionar.php">Adicionar currículo</a></li>
			<li><a href="sobre.php">Sobre</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
	
	
	
	
	
	
	
	
	
	
		<div id="quadro1">
	<h3>Lista de Perfil</h3>
	<table border="5" >

	<tr>

	<th>Nome</th>
	<th >Idade</th>
	<th>Profissão</th>

	</tr>

	<tr>

	<td bgcolor="#fff">Marcos</td>
	<td bgcolor="#fff">23</td>
	<td bgcolor="#fff">Tec.Enfermagen</td>

	</tr>

	<tr>

	<td bgcolor="#fff">Lucal</td>
	<td bgcolor="#fff"> 19</td>
	<td bgcolor="#fff"> Motorista</td>

	</tr>


	</tr>

	<tr>

	<td bgcolor="#fff">Carla</td>
	<td bgcolor="#fff"> 21</td>
	<td bgcolor="#fff"> Professora</td>

	</tr>

	</tr>

	<tr>

	<td bgcolor="#fff">Rafael</td>
	<td bgcolor="#fff"> 34</td>
	<td bgcolor="#fff"> Diretor de TI</td>

	</tr>

	</tr>

	<tr>

	<td bgcolor="#fff">Bruno</td>
	<td bgcolor="#fff"> 32</td>
	<td bgcolor="#fff"> Eng.Civil</td>

	</tr>

	</table>


 <ul>
     <li>
        <img width="390px"  height="290px" src="images/foto-perfil.jpg">
		
    </li>
    <li>
        <img  width="390px"  height="290px" src="images/img1.jpg">
		
    </li>
	
	  <li>
        <img width="390px"  height="290px" src="images/img2.jpg">
		
    </li>
	
	</ul>

   <font align="center"><h4> Aqui você cria seu perfil, e apresenta para outros usúarios suas qualidades!!</h4> </font>

	
	
	 <h3>Criar Perfil</h3>
	<form id="formulario" name="formulario" method="POST" action="">
		<p> <label> Nome: </label>
			<input type="tex" size="40" id="nome" name="nome" autofocus /> </p>
			
			
		<p> <label> Idade: </label>
			<input type="number" min="1" max="120" id="idade" name="idade"  /> </p>
			
			<p> <label> Email: </label>
			<input type="tex"  size="40" min="1" max="120" id="email" name="email"  /> </p>
			
			<p> <label> Profissão: </label>
			<input type="tex"  size="40" min="1" max="120" id="profiss" name="profiss"  /> </p>
		
		
		<label> Sexo: </label>
		<select id="sexo" name="sexo">
			<option> Não deseja informar</option>
			<option value="Masculino">M</option>
			<option value="Femenino"> F</option>

	
		</select>	
			
		<p>  <button type="submit" id="btenviar" name="btenviar"> Enviar </button>

		
			<?php
		// criar variaveis e usar $_GET para pegar dados
		@$nome = $_POST['nome'];
		@$idade = $_POST['idade'];
		@$email = $_POST['email'];
		@$profiss = $_POST['profiss'];
		@$sexo = $_POST['sexo'];
		// Escrever entre aspas string com variaveis sem usar ponto
		
		echo "<font  face='arial'  color='#00000'   size='3'> <p> Nome: $nome </p>";
		echo "<p> Idade: $idade anos </p>";
		echo "<p> Email: $email </p>";
		echo "<p> Profissão: $profiss</p>";
		echo "<p> Sexo: $sexo </p> </font>";
	?>
			
	</form>
	
	
	</div>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
   
	
	
	
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