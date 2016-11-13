<html>
<head>
	
	<title>Cadastro de Produtos</title>
</head>
<body>
<?php
session_start();

$user = 'root';
$pass = '';
$db = 'sistemamedico';

$conexao = mysqli_connect('localhost', $user, $pass, $db);
$login=$_POST['usuario'];
$senha=$_POST['senha'];
$resultado = mysqli_query($conexao, "SELECT login,senha FROM usuario where login ='".$login."' and senha = '".$senha."'");
$num_linha=mysqli_num_rows($resultado);
//$usu=mysqli_fetch_array($resultado);
if ($num_linha > 0){
	while($row = mysqli_fetch_array($resultado))
	{
		if ($row["login"]=='admin' and $row["senha"]=='admin')
		{
			$_SESSION['usuario']=1;
			header("location:menuprincipalMaster.php");
		}
		else{
			$_SESSION['usuario']=2;
				header("location:menuprincipalNormal.php");
		}
	
	}
						
}else{
	
	echo "Usuário não cadastrado";
}




mysqli_close($conexao);


?>
</body>
</html>
