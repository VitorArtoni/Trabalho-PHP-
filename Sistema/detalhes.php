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
	
	<body id="body_formPaciente">	

	
	<div id="dadosPaciente">		

	<?php

		require '../scripts/conexao.php';
		$cpf = $_POST["cpf"];
		

		$query = "SELECT cpf, nome, datanascimento, telefone, email, tiposangue, planosaude, alergias, prontuario FROM paciente WHERE cpf = $cpf";
    	$resultado = mysqli_query($conexao,$query);

		if ($_SESSION['usuario']==1)
		{			
			$urlSalvar = "../scripts/salvarPmaster.php";

			while ($row = $resultado->fetch_assoc()) {
			
				echo '<form action="'.$urlSalvar.'" method="post">';
				echo '<table id="tabelaPacientes">';
				echo '<tr id="cabecalho" class="linha">';
				echo '<td>CPF</td></tr>';
				echo '<tr><td class="dado"><input required id="cpf" type = "text" name = "cpf" readonly="readonly" value="'.$row['cpf'].'"/></td></tr>';
				echo '<tr id="cabecalho" class="linha">';
				echo '<td>Nome</td>';
				echo '<td>Data de Nascimento</td>';	
				echo '<td>Telefone</td>';
				echo '<td>E-mail</td>';
				echo '<td>Tipo Sanguíneo</td>';
				echo '<td>Plano de Saúde</td></tr><tr>';
				echo '<td class="dado"><input required  type = "text" name = "nome" maxlength = "50" value="'.$row['nome'].'"/></td>';
				echo '<td class="dado"><input required  type = "text" name = "datanascimento" maxlength = "20" size ="20" value="'.$row['datanascimento'].'"/></td>';
				echo '<td class="dado"><input required  type = "text" name = "telefone" maxlength = "15" size ="15" value="'.$row['telefone'].'"/></td>';
				echo '<td class="dado"><input required  type = "text" name = "email" maxlength = "50"value="'.$row['email'].'"/></td>';
				echo '<td class="dado"><input required  type = "text" name = "tiposangue" maxlength = "20" value="'.$row['tiposangue'].'"/></td>';
				echo '<td class="dado"><input required  type = "text" name = "planosaude" maxlength = "50" value="'.$row['planosaude'].'"/></td></tr></table>';
				echo '<div id="alergia">Alergias<br><br> <textarea id="txtAlergia" rows="10" cols="80" name = "alergias" >'.$row['alergias'].'</textarea></div>';
				echo '<div id="prontuario">Prontuário<br><br> <textarea id="txtProntuario" rows="15" cols="80" name = "prontuario">'.$row['prontuario'].'</textarea></div>';
				echo '<br><input type="submit" class="button" name="btnSalvar" value="Salvar Ficha"/></form>';
	    	}
		}
		else
			if ($_SESSION['usuario']==2)
		{			
			$urlSalvar = "../scripts/salvarPnormal.php";

			while ($row = $resultado->fetch_assoc()) {
			
			echo '<form action="'.$urlSalvar.'" method="post">';		
			echo '<table id="tabelaPacientes">';
			echo '<tr id="cabecalho" class="linha">';
			echo '<td>CPF</td></tr>';	
			echo '<tr><td class="dado"><input required id="cpf" type = "text" name = "cpf" readonly="readonly" value="'.$row['cpf'].'"/></td></tr>';	
			echo '<tr id="cabecalho" class="linha">';			
			echo '<td>Nome</td>';
			echo '<td>Data de Nascimento</td>';			
			echo '<td>Telefone</td>';
			echo '<td>E-mail</td>';
			echo '<td>Tipo Sanguíneo</td>';
			echo '<td>Plano de Saúde</td></tr><tr>';			
			echo '<td class="dado"><input required  type = "text" name = "nome" readonly="readonly" value="'.$row['nome'].'"/></td>';	
			echo '<td class="dado"><input required  type = "text" name = "datanascimento" readonly="readonly" value="'.$row['datanascimento'].'"/></td>';		
			echo '<td class="dado"><input required  type = "text" name = "telefone" readonly="readonly" value="'.$row['telefone'].'" /></td>';		
			echo '<td class="dado"><input required  type = "text" name = "email" readonly="readonly" value="'.$row['email'].'"/></td>';		
			echo '<td class="dado"><input required  type = "text" name = "tiposangue" readonly="readonly" value="'.$row['tiposangue'].'"/></td>';	
			echo '<td class="dado"><input required  type = "text" name = "planosaude" readonly="readonly" value="'.$row['planosaude'].'"/></td></tr></table>';
			echo '<div id="alergia">Alergias<br><br><input required id="txtAlergia" type = "text" name = "alergias" readonly="readonly" value="'.$row['alergias'].'"/></div>';
			echo '<div id="prontuario">Prontuário<br><br><input required id="txtProntuario" type = "text" name = "prontuario" value="'.$row['prontuario'].'"/></div>';			
			echo '<br><input type="submit" class="button" name="btnSalvar" value="Salvar Ficha"/></form>';
	    	}
		}
		?>
		</div>
	</body>	
</html>
