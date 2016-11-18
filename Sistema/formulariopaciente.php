<!DOCTYPE html>
<?php 
	session_start();

	if ($_SESSION['usuario'] == 0){
		header("location:login.php");
	}
?>
<html>
	<head>
		<meta charset="UTF-8"> 
		<link rel="stylesheet" type="text/css" href="CSS/estilo.css" />
		<title> Formulário Paciente</title>
		<script src="script.js"></script>
	</head>
	
	<body id="body_formPaciente">
		
		<div class="formulario">
			<form action="../scripts/cadastraPaciente.php" id="formPaciente" name="formPaciente" method="post">	
				<p> Formulário de Pacientes </p> <br>
				<div class="FormUser">
					<p> Nome  </p>
					<input type="text" class="caixa" id="nome_paciente" name="nome_paciente" size="28%"/>
					<p> CPF </P>
					<input type="text" class="caixa" id="cpf_paciente" name="cpf_paciente" size="28%"/>
					<p> Data de Nascimento </p>
					<input type="text" class="caixa" id="datanascimento_paciente" name="datanascimento_paciente" size="28%"/>
					<p> Telefone </p>
					<input type="text" class="caixa" id="telefone_paciente" name="telefone_paciente" size="28%"/>
					<p> Email </p>
					<input type="text" class="caixa" id="email_paciente" name="email_paciente" size="28%"/>
				</div>
				
				<div class="FormUser">
					<p> Tipo Sanguíneo </p>
					<input type="text" class="caixa" id="tiposangue_paciente" name="tiposangue_paciente" size="28%"/>
					<p> Plano de Saúde </p>
					<input type="text" class="caixa" id="planosaude_paciente" name="planosaude_paciente" size="28%"/>
					<p> Alergias </p>
					<br/>
					<textarea rows="2" cols="50"class="caixa" id="alergias_paciente" name="alergias_paciente" size="28%"/> </textarea>
					<p> Prontuário </p>
					<br/>
					<textarea rows="2" cols="50" class="caixa" id="prontuario_paciente" name="prontuario_paciente" size="28%"/> </textarea>
				</div>
				<p> <input type="button" onclick="validarPaciente()" class="button" id="botao_menu_iframe" value="Cadastrar"/> </p>
			</form>
		</div>		
	</body>
</html>
