<!DOCTYPE html>
<?php 
	session_start();

	//unset($_SESSION['usuario']);
	
	
	if ($_SESSION['usuario'] == 0){
		header("location:login.php");
	}
?>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="CSS/estilo.css" />
		<title> Pacientes</title>
	</head>
	
	<body>	

	
	<div id="dadosPaciente">			

	<?php

		require '../scripts/conexao.php';
		$cpf = $_POST["cpf"];
		if ($_SESSION['usuario']==1){
			
			// Se for Enfermeiro Chefe salvarPmaster.php Se for medico salvarPnormal.php
		$urlSalvar = "../scripts/salvarPmaster.php";
		}
		else
			if ($_SESSION['usuario']==2)
		{
		
			$urlSalvar = "../scripts/salvarPnormal.php";
		}

		$query = "SELECT cpf, nome, datanascimento, telefone, email, tiposangue, planosaude, alergias, prontuario FROM paciente WHERE cpf = $cpf";
    	$resultado = mysqli_query($conexao,$query);

		 
		while ($row = $resultado->fetch_assoc()) {
			
			echo '<form action="'.$urlSalvar.'" method="post">';		
			echo '<table id="tabelaPacientes">';
			echo '<tr id="cabecalho" class="linha">';
			echo '<td>CPF</td></tr>';	
			echo '<tr><td class="dado"><input required  type = "text" name = "cpf" value="'.$row['cpf'].'"/></td></tr>';	
			echo '<tr id="cabecalho" class="linha">';			
			echo '<td>Nome</td>';
			echo '<td>Data de Nascimento</td>';			
			echo '<td>Telefone</td>';
			echo '<td>E-mail</td>';
			echo '<td>Tipo Sanguíneo</td>';
			echo '<td>Plano de Saúde</td></tr><tr>';			
			echo '<td class="dado"><input required  type = "text" name = "nome" value="'.$row['nome'].'"/></td>';	
			echo '<td class="dado"><input required  type = "text" name = "datanascimento" value="'.$row['datanascimento'].'"/></td>';		
			echo '<td class="dado"><input required  type = "text" name = "telefone" value="'.$row['telefone'].'" /></td>';		
			echo '<td class="dado"><input required  type = "text" name = "email" value="'.$row['email'].'"/></td>';		
			echo '<td class="dado"><input required  type = "text" name = "tiposangue" value="'.$row['tiposangue'].'"/></td>';	
			echo '<td class="dado"><input required  type = "text" name = "planosaude" value="'.$row['planosaude'].'"/></td></tr></table>';
			echo '<div id="alergia">Alergias<br><br><input required  type = "text" name = "alergias" value="'.$row['alergias'].'" /></div>';
			echo '<div id="prontuario">Prontuário<br><br><input required  type = "text" name = "prontuario" value="'.$row['prontuario'].'"/></div>';			
			echo '<br><input type="submit" name="btnSalvar" value="Salvar Ficha"/></form>';
	
	    	}

		/*		
			
		
		*/
		?>
		</div>
	</body>	
</html>
