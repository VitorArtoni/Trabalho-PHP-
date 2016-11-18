<?php

require 'conexao.php';

$cpf = $_POST["cpf_medico"];
$nome = $_POST["nome_medico"];
$login = $_POST["usuario_medico"];
$senha = $_POST["senha_medico"];

echo "<style type='text/css'>";
echo "p{color:#194c83;margin-left:33%;margin-bottom:0.5%;font-size:1.6em;}";
echo "</style>";

    $query = "Insert into usuario (cpf, nome, login, senha) values('$cpf', '$nome', '$login', '$senha')";
    $resultado = mysqli_query($conexao,$query);
    if($resultado)
    {
        echo "<br /><p> Cadastro realizado com sucesso</p><br />";
    }
    else	
    {
        echo "<br /><p> ERRO NO CADASTRO </p><br />";
    }

mysqli_close($conexao);

?>