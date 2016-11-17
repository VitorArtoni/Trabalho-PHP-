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
			<form action="../scripts/cadastraMedico.php" name="formMedico" method="post" onsubmit="return validarMedico()">
				<p> Formulário de Médicos </p> <br>
				<p> Nome  </p>
				<input type="text" class="caixa" name="nome_medico" size="28%"/>
				<p> CPF </P>
				<input type="text" class="caixa" name="cpf_medico" size="28%"/>
				<p> Usuário </p>
				<input type="text" class="caixa" name="usuario_medico" size="28%"/>
				<p> Senha </p>
				<input type="password" class="caixa" name="senha_medico" size="28%"/>
				<p> <input type="submit" class="button" id="botao_menu" value="Cadastrar" name="logar"/> </p>
			</form>
		</div>
	</body>
</html>
