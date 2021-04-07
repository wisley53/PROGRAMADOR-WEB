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
            <li><a href="index.php">Home</a></li>
            <li><a href="modelos.php">modelos</a></li>
            <li><a href="perfil.php">Perfil</a></li>
			<li class="active"><a href="#">cadastrar Usúario</a></li>
			<li><a href="adicionar.php">Adicionar currículo</a></li>
			<li><a href="sobre.php">Sobre</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
	
	
	
	
	<?php
	   $vetor = array();
	$vetor[] = array("Nome"=>"Maria", "Email"=>"maria43@gmail.com"); 
	$vetor[] = array("Nome"=>"Lucas", "Email"=>"lucas11@gmail.com"); 
	$vetor[] = array("Nome"=>"Carlos", "Email"=>"carlos66@gmail.com");  
	$vetor[] = array("Nome"=>"Brenda", "Email"=>"brenda23@gmail.com");  
	$vetor[] = array("Nome"=>"Camila", "Email"=>"camila@gmail.com");  
?>

	<div id="quadro1">
	<h3>Lista de Registro</h3>
	<table border="5">

	<tr>
      <th>Nome</th>
	  <th>Email</th>
      
   </tr>
   
   
<?php
    foreach($vetor as $valores){
?>
   <tr>
    <td><?php echo $valores['Nome'];?></td>
	 <td><?php echo $valores['Email'];?></td>
   
</tr>
   
  
	<?php
    }
?>

	</table> 
	
	


	<div id="quadro3">
	 <h3 class="cadas">Cadastras Usúario</h3>
	<form id="formulario" name="formulario" method="POST" action="">
		<p> <label> Nome: </label>
			<input type="tex" size="40" id="nome" name="nome" autofocus /> </p>
			
			<p> <label> Email: </label>
			<input type="tex"  size="40" min="1" max="120" id="email" name="email"  /> </p>
			
			<p> <label> Confirmar Email: </label>
			<input type="tex"  size="40" min="1" max="120" id="email" name="email"  /> </p>
			
			
			<p> <label> Senha: </label>
			<input type="password"  size="20" min="1" max="120" id="senha" name="senha"  /> </p>
		
			
		<p>  <button type="submit" id="btenviar" name="btenviar"> Enviar </button>

		
			<?php
		// criar variaveis e usar $_GET para pegar dados
		@$nome = $_POST['nome'];
		@$email = $_POST['email'];
		@$email2 = $_POST['email2'];
		@$senha = $_POST['senha'];
		// Escrever entre aspas string com variaveis sem usar ponto
		
		echo "<font  face='arial'  color='#00000'   size='3'> <p> Nome: $nome </p>";
	
		echo "<p> Email: $email </p>";
		echo "<p> Confirmar Email: $email </p>";
		echo "<p> Senha: $senha </p> </font>";
		
	?>
	
	
	

			
	</form>
	
	
	</div>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
   
	
	
	
	<footer class="footer">
		<div class="container">
			<p> Wisley santos de Oliveira &copy; 2021. </p>
		</div>
	</footer>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>