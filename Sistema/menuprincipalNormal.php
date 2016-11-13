<!DOCTYPE html>
<?php 
	session_start();

	//unset($_SESSION['usuario']);
	
	
	if (($_SESSION['usuario'] == 0) || ( $_SESSION['usuario'] == 1)){
		header("location:login.php");
	}
?>
<html>
	<head>
		<meta charset="UTF-8"> 
		<link rel="stylesheet" type="text/css" href="CSS/estilo.css" />
		<title> Menu Principal</title>
	</head>
	
	<body>
			<div id="container">
			<a href="login.php" class="button" style="top: 236px;left:199px;">Sair</a>
			
				<div id="menu">
					<h3> <a href="dadospacientes.php" target=""> <input type="button" id="botao_menu" value="Visualizar Dados"/> </a> </h3>
				</div>
				
				<div id="conteudo">
					<iframe id="Iframe" name="iframe_a"> </iframe>
				</div>
				
			</div>
	</body>
	
</html>
