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
	<link href="css/adicionar.css" rel="stylesheet">
	
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
			<li><a href="cadastrar.php">cadastrar Usúario</a></li>
			<li class="active"><a href="#">Adicionar currículo</a></li>
			<li><a href="sobre.php">Sobre</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
	
	
	
	<?php
	   $vetor = array();
	$vetor[] = array("Nome"=>"Maria", "Idade"=>'22',"Email"=>"maria43@gmail.com", "Profissão"=>"Professora", "Sexo"=>"Feminino", "Escolaridade"=>"Ensino Superior" , "curso"=>"Operadora de caixa"); 
	$vetor[] = array("Nome"=>"Lucas", "Idade"=>'19',"Email"=>"lucas11@gmail.com", "Profissão"=>"Analista", "Sexo"=>"Maculino", "Escolaridade"=>"Ensino Superior" , "curso"=>"Banco de dados"); 
	$vetor[] = array("Nome"=>"Carlos", "Idade"=>'32',"Email"=>"carlos66@gmail.com", "Profissão"=>"Engenheiro", "Sexo"=>"Maculino", "Escolaridade"=>"Ensino Superior" , "curso"=>"designer");  
	$vetor[] = array("Nome"=>"Brenda", "Idade"=>'21',"Email"=>"brenda23@gmail.com", "Profissão"=>"Enfermeira", "Sexo"=>"Feminino", "Escolaridade"=>"Ensino Superior" , "curso"=>"Tec.enfermegaem");  
	$vetor[] = array("Nome"=>"Camila", "Idade"=>'19',"Email"=>"camila@gmail.com", "Profissão"=>"Tec.informática", "Sexo"=>"Feminino", "Escolaridade"=>"Ensino médio", "curso"=>"manutenção de PC");  
?>

	<div id="quadro1">
	<h3>Lista de Registro</h3>
	<table border="5">

	<tr>
      <th>Nome</th>
      <th>Idade</th>
	  <th>Email</th>
      <th>Profissão</th>
	  <th>Sexo</th>
	  <th>Escolaridade</th>
	  <th>Cursos</th>
   </tr>
   
   
<?php
    foreach($vetor as $valores){
?>
   <tr>
    <td><?php echo $valores['Nome'];?></td>
    <td><?php echo $valores['Idade'];?></td>
	 <td><?php echo $valores['Email'];?></td>
    <td><?php echo $valores['Profissão'];?></td>
	<td><?php echo $valores['Sexo'];?></td>
	<td><?php echo $valores['Escolaridade'];?></td>
	<td><?php echo $valores['curso'];?></td>
</tr>
   
  
	<?php
    }
?>

	</table> 
	
	</div>
	
	
	<div id="quadro3">
	 <h3 class="cadas">Adicionar CURRÍCULO</h3>
	<form id="formulario" name="formulario" method="POST" action="">
		<p> <label> Nome: </label>
			<input type="tex" size="40" id="nome" name="nome" autofocus /> </p>
			
			
			<p> <label> Idade: </label>
			<input type="number"  size="40" min="1" max="120" id="idade" name="idade"  /> </p>
			
			
			<p> <label> Email: </label>
			<input type="tex"  size="40" min="1" max="120" id="email" name="email"  /> </p>
			
			<p> <label> Profissão: </label>
			<input type="tex"  size="30" min="1" max="200" id="prof" name="prof" /> </p>
			
			
			<label> Sexo: </label>
		<select id="sexo" name="sexo">
			<option> Não deseja informar</option>
			<option value="Masculino">Masculino</option>
			<option value="Femenino"> Femenino</option>

	
		</select>	
			
			
			<label> Escolaridade: </label>
		<select id="esco" name="esco">
			<option value="Nenhum">Nenhum</option>
			<option value="Ensino Médio">Ensino Médio</option>
			<option value="Ensino Fundamental"> Ensino Fundamental</option>
			<option value="Ensino Superior"> Ensino Superior</option>

	
		</select>	
			
			
		
			<p> <label> Cursos: </label>
			<input type="tex"  size="60" min="1" max="200" id="curso" name="curso" /> </p>
		
			
		<p>  <button type="submit" id="btenviar" name="btenviar"> Enviar </button>

		
			<?php
		// criar variaveis e usar $_GET para pegar dados
		@$nome = $_POST['nome'];
		@$idade = $_POST['idade'];
		@$email = $_POST['email'];
		@$prof = $_POST['prof'];
		@$sexo = $_POST['sexo'];
		@$esco = $_POST['esco'];
		@$curso = $_POST['curso'];
		// Escrever entre aspas string com variaveis sem usar ponto
		
		echo "<font  face='arial'  color='#00000'   size='3'> <p> Nome: $nome </p>";
		echo "<p> Idade: $idade </p>";
		echo "<p> Email: $email </p>";
		echo "<p> Profissão: $prof </p>";
		echo "<p> sexo: $sexo </p>";
		echo "<p> Escolaridade: $esco </p>";
		echo "<p> Curso: $curso </p> </font>";
		
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