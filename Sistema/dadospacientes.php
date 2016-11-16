<!DOCTYPE html>

<?php 
	session_start();

	
	if ($_SESSION['usuario'] == 0){
		header("location:login.php");
	}
?>
	
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="CSS/estilo.css" />
    <title>Dados do Paciente</title>
</head>
<body id="body_formPaciente">

    <div id="dados">
<?php
  
    error_reporting(E_ALL ^ E_DEPRECATED);

    require_once ('../scripts/conexao.php');
    $query = "SELECT * FROM paciente";
    $resultado = mysqli_query($conexao,$query);

    if(mysqli_num_rows($resultado)>0)
    {
        echo "<table id='tabelaPacientes'><tr id='cabecalho' class='linha'><td>CPF</td><td>Nome</td></tr>";
        while($row = mysqli_fetch_assoc($resultado))
        {
            echo "<tr><td class='dado'>".$row["cpf"]."</td><td class='dado'>".$row["nome"]."</td><td><form action='detalhes.php' method='post'>
            <input type = 'hidden' name='cpf' value ='".$row["cpf"]."'></input><input type='submit' value ='Ver mais'/></form></td></tr>";
        }
        echo "</table>";
    }
    else
    {
        echo "Não há pacientes cadastrados no sistema.";
    }

    mysqli_close($conexao);
?>

    </div>
</body>
</html>