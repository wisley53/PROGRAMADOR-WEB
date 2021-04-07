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
            <li class="active"><a href="#">modelos</a></li>
            <li><a href="perfil.php">Perfil</a></li>
			<li><a href="cadastrar.php">cadastrar Usúario</a></li>
			<li><a href="adicionar.php">Adicionar currículo</a></li>
			<li><a href="sobre.php">Sobre</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
	
	
	<?php
	   $vetor = array();
	$vetor[] = array("Nome"=>"Maria", "Idade"=>'22', "Profissão"=>"Professora", "Sexo"=>"Feminino", "Escolaridade"=>"Ensino Superior"); 
	$vetor[] = array("Nome"=>"Lucas", "Idade"=>'19', "Profissão"=>"Analista", "Sexo"=>"Maculino", "Escolaridade"=>"Ensino Superior"); 
	$vetor[] = array("Nome"=>"Carlos", "Idade"=>'32', "Profissão"=>"Engenheiro", "Sexo"=>"Maculino", "Escolaridade"=>"Ensino Superior");  
	$vetor[] = array("Nome"=>"Brenda", "Idade"=>'21', "Profissão"=>"Enfermeira", "Sexo"=>"Feminino", "Escolaridade"=>"Ensino Superior");  
	$vetor[] = array("Nome"=>"Camila", "Idade"=>'19', "Profissão"=>"Tec.informática", "Sexo"=>"Feminino", "Escolaridade"=>"Ensino médio");  
?>

	<div id="quadro1">
	<h3>Lista de Registro</h3>
	<table border="5" >

	<tr>
      <th>Nome</th>
      <th>Idade</th>
      <th>Profissão</th>
	  <th>Sexo</th>
	  <th>Escolaridade</th>
   </tr>
   
   
<?php
    foreach($vetor as $valores){
?>
   <tr>
    <td><?php echo $valores['Nome'];?></td>
    <td><?php echo $valores['Idade'];?></td>
    <td><?php echo $valores['Profissão'];?></td>
	<td><?php echo $valores['Sexo'];?></td>
	<td><?php echo $valores['Escolaridade'];?></td>
</tr>
   
  
	<?php
    }
?>

	</table> 


 <ul>
     <li>
        <img width="390px"  height="290px" src="images/foto1.png">
		<h3> Modelo 1</h3>
    </li>
    <li>
        <img  width="390px"  height="290px" src="images/foto2.jpg">
		<h3> Modelo 2</h3>
    </li>
	
	  <li>
        <img width="390px"  height="290px" src="images/foto3.png">
		<h3> Modelo 3</h3>
    </li>
	
	</ul>



	
	
	 <h3>Formulario para modelos</h3>
	<form id="formulario" name="formulario" method="POST" action="">
		<p> <label> Nome: </label>
			<input type="tex" size="40" id="nome" name="nome" autofocus /> </p>
			
			
		<p> <label> Idade: </label>
			<input type="number" min="1" max="120" id="idade" name="idade"  /> </p>
		
		
		<label> Tipo de Modelo: </label>
		<select id="modelo" name="modelo">
			<option> Nenhum</option>
			<option value="1">Modelo 1</option>
			<option value="2"> Modelo 2</option>
			<option value="3"> Modelo 3</option>
	
		</select>	
			
		<p>  <button type="submit" id="btenviar" name="btenviar"> Enviar </button>

		
			<?php
		// criar variaveis e usar $_GET para pegar dados
		@$nome = $_POST['nome'];
	  	@$idade = $_POST['idade'];
		@$modelo = $_POST['modelo'];
		// Escrever entre aspas string com variaveis sem usar ponto
		
		echo "<font  face='arial'  color='#00000'   size='3'> <p> Nome: $nome </p>";
		echo "<p> Idade: $idade anos </p>";
		echo "<p> Modelo: $modelo </p> </font>";
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