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
		<meta charset="UTF-8"> 
		<link rel="stylesheet" type="text/css" href="CSS/estilo.css" />
		<title> Formulário Paciente</title>
	</head>
	
	<body id="body_formPaciente">
		<div class="formulario">
			<form action="../scripts/cadastraPaciente.php" method="post">	
				<p> Formulário de Pacientes </p> <br>
				<div class="FormUser">
					<p> Nome  </p>
					<input type="text" class="caixa" name="nome_paciente" size="28%"/>
					<p> CPF </P>
					<input type="text" class="caixa" name="cpf_paciente" size="28%"/>
					<p> Data de Nascimento </p>
					<input type="text" class="caixa" name="datanascimento_paciente" size="28%"/>
					<p> Telefone </p>
					<input type="text" class="caixa" name="telefone_paciente" size="28%"/>
					<p> Email </p>
					<input type="text" class="caixa" name="email_paciente" size="28%"/>
				</div>
				
				<div class="FormUser">
					<p> Tipo Sanguíneo </p>
					<input type="text" class="caixa" name="tiposangue_paciente" size="28%"/>
					<p> Plano de Saúde </p>
					<input type="text" class="caixa" name="planosaude_paciente" size="28%"/>
					<p> Alergias </p>
					<input type="text" class="caixa" name="alergias_paciente" size="28%"/>
					<p> Prontuário </p>
					<input type="text" class="caixa" name="prontuario_paciente" size="28%"/>
				</div>
				<p> <input type="submit" class="button" id="botao_menu_iframe" value="Cadastrar" name="logar"/> </p>
			</form>
		</div>
	</body>
</html>
