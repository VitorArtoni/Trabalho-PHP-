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
		<title> Formulário Médico</title>
		<script src="script.js"></script>
	</head>
		
	<body id="body_formPaciente">
	
		<div class="formulario">
			<form action="../scripts/cadastraMedico.php" id="formMedico" name="formMedico" method="post">
				<p> Formulário de Médicos </p> <br>
				<p> Nome  </p>
				<input type="text" class="caixa" id="nome_medico" name="nome_medico" size="28%"/>
				<p> CPF </P>
				<input type="text" class="caixa" id="cpf_medico" name="cpf_medico" size="28%"/>
				<p> Usuário </p>
				<input type="text" class="caixa" id="usuario_medico" name="usuario_medico" size="28%"/>
				<p> Senha </p>
				<input type="password" class="caixa" id="senha_medico" name="senha_medico" size="28%"/>
				<p> <input type="button" onclick="validarMedico()" class="button" id="botao_menu" value="Cadastrar" name="logar"/> </p>
			</form>
		</div>
	</body>
</html>
