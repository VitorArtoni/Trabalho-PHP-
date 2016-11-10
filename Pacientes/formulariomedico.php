<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="CSS/estilo.css" />
		<title> Formulário Médico</title>
		
	</head>
	
	<body id="body_formPaciente">
	
		<div class="formulario">
			<p> Formulário de Médicos </p> <br>
			<form action="scripts/cadastraMedico.php" method="post">
				<p> Nome  </p>
				<input type="text" class="caixa" name="nome_medico" size="28%"/>
				<p> CPF </P>
				<input type="text" class="caixa" name="cpf_medico" size="28%"/>
				<p> Usuário </p>
				<input type="text" class="caixa" name="usuario_medico" size="28%"/>
				<p> Senha </p>
				<input type="paswword" class="caixa" name="senha_medico" size="28%"/>
				<p> <input type="submit" id="botao_menu" value="Cadastrar" name="logar"/> </p>
			</form>
		</div>
		
	</body>
	
</html>
