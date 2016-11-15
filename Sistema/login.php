<!DOCTYPE html>

<?php
	session_start();
	$_SESSION['usuario'] = 0;
	
?>

<html>
	<head>
		<link rel="stylesheet" type="text/css" href="CSS/estilo.css" />
		<title> Login </title>
	</head>
	
	<body>
		<h1> Nome do Hospital </h1>
		
		<div >
			<form id="formLogin" action="validar.php" method="POST">
				<p>Usuário</p>
				<input type="text" class="caixa" name="usuario" size="28%"/> 
				<p>Senha  </p>
				<input type="password" class="caixa" name="senha" size="28%"/>
				<p> <input type="submit" class="button" id="botao" value="Entrar" name="logar"/> </p>
			</form>
		</div>
		
	</body>
	
</html>
